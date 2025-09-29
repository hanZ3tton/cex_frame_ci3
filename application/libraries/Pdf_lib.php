<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

define('FPDF_PATH', APPPATH . 'third_party/fpdf/fpdf.php');
define('FPDI_PATH', APPPATH . 'third_party/fpdi/fpdi.php');

require_once(FPDF_PATH);
require_once(FPDI_PATH);

class Pdf_lib extends FPDI
{
    const FPDF_FONTPATH = APPPATH . 'third_party/fpdf/font/';

    // Gunakan constructor dengan parameter eksplisit
    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        // Panggil konstruktor FPDI/FPDF dengan parameter
        parent::__construct($orientation, $unit, $size);

        if (!defined('FPDF_FONTPATH')) {
            define('FPDF_FONTPATH', self::FPDF_FONTPATH);
        }
    }
}
