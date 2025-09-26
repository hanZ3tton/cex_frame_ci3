<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barcode extends CI_Controller
{

    public function index()
    {
        // load library
        $this->load->library('Barcode128');

        // generate barcode untuk nomor AWB
        $awb = 'nigga';
        $barcode = $this->barcode128->generate($awb);

        // tampilkan
        echo "<h3>AWB: $awb</h3>";
        echo $barcode; // sudah berupa <img src="data:image/png;base64,..."/>
    }
}
