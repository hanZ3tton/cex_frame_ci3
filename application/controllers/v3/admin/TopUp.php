<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topup extends MY_Controller
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
        load_page__assets($this, 'topup/list');

        $this->loadView('v3/admin/topup/index', 'Topup', $data);
    }

    public function create()
    {
        $data = [];

        $this->loadView('v3/admin/topup/create', 'Deposit', $data);
    }
}
