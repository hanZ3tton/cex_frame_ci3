<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barcode extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('barcode'); // load helper
    }

    public function index()
    {
        $data['awbnumber'] = "AWB123456789";
        $this->load->view('barcode', $data);
    }
}
