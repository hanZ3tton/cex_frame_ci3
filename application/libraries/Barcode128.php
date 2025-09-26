<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Simple Barcode 128 Generator (PNG base64)
 * Compatible with PHP 5.6+
 */
class Barcode128
{

    public function generate($code, $widthFactor = 2, $height = 50)
    {
        // Mapping karakter ke Code128 (set B)
        $codes = $this->getCode128Map();
        $checksum = 104; // Start Code B

        // Hitung checksum
        for ($i = 0; $i < strlen($code); $i++) {
            $char = $code[$i];
            $checksum += ($i + 1) * $codes[$char]['id'];
        }
        $checksum = $checksum % 103;

        // Susun pola barcode (start B + data + checksum + stop)
        $pattern = $codes['START_B']['bars'];
        for ($i = 0; $i < strlen($code); $i++) {
            $pattern .= $codes[$code[$i]]['bars'];
        }
        $pattern .= $this->findById($checksum, $codes);
        $pattern .= $codes['STOP']['bars'];

        // Buat gambar
        $width = strlen($pattern) * $widthFactor;
        $im = imagecreate($width, $height);
        $white = imagecolorallocate($im, 255, 255, 255);
        $black = imagecolorallocate($im, 0, 0, 0);

        $x = 0;
        for ($i = 0; $i < strlen($pattern); $i++) {
            $color = ($pattern[$i] == '1') ? $black : $white;
            imagefilledrectangle($im, $x, 0, $x + $widthFactor - 1, $height, $color);
            $x += $widthFactor;
        }

        ob_start();
        imagepng($im);
        $pngData = ob_get_clean();
        imagedestroy($im);

        return '<img src="data:image/png;base64,' . base64_encode($pngData) . '" />';
    }

    private function findById($id, $codes)
    {
        foreach ($codes as $c) {
            if ($c['id'] === $id) return $c['bars'];
        }
        return '';
    }

    private function getCode128Map()
    {
        // Ringkasan mapping: hanya karakter ASCII 32-126
        // Sumber pola: spesifikasi Code128
        $map = [];
        $patterns = file(__DIR__ . '/code128_patterns.txt', FILE_IGNORE_NEW_LINES);
        foreach ($patterns as $line) {
            list($id, $char, $bars) = explode("\t", $line);
            $map[$char] = ['id' => (int)$id, 'bars' => $bars];
            if ($char == ' ') $map[' '] = ['id' => (int)$id, 'bars' => $bars];
            if ($char == 'START_B' || $char == 'STOP') {
                $map[$char] = ['id' => (int)$id, 'bars' => $bars];
            }
        }
        return $map;
    }
}
