<?php

use Picqer\Barcode\BarcodeGeneratorPNG;

if (!function_exists('generate_barcode')) {
    function generate_barcode($awbnumber)
    {
        $generator = new BarcodeGeneratorPNG();
        return '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($awbnumber, $generator::TYPE_CODE_128)) . '" />';
    }
}
