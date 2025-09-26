<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Kalog extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kalog_model');

    $this->defaultLayout = 'v3/layouts/app';
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data = [
      'kalog' => $this->Kalog_model->get_all_data_kalog()
    ];
    load_page__assets($this, 'kalog/list');

    $this->loadView('v3/admin/kalog/index', 'Kalog Data', $data);
  }

  public function create()
  {
    $data = [];

    $this->loadView('v3/admin/kalog/create', 'Request Kalog', $data);
  }
}
