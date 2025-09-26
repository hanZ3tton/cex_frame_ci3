<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipping_rates extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->defaultLayout = 'v3/layouts/app';
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [];

        $this->loadView('v3/admin/shipping_rates/index', 'Shipping Rates', $data);
    }
}
