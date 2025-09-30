<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topup extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->defaultLayout = 'v3/layouts/app';

        $this->load->model('Mitra_model');
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

    public function store()
    {
        $mitra = $this->Mitra_model->get_mitra_by_account($this->session->userdata('account'));
        $total = $mitra->deposit_balance + $this->input->post('Nominal');
        $data = [
            'deposit_balance' => $total,
        ];
        $this->Mitra_model->update_mitra($this->session->userdata('account'), $data);
        redirect('admin/topup');
        // code to process top-up submission
    }
}
