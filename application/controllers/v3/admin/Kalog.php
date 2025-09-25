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

    $this->config->load('assets/kalog/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/kalog/index', 'Kalog Data', $data);
  }

  public function create()
  {
    $data = [];

    $this->config->load('assets/kalog/form');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/kalog/create', 'Request Kalog', $data);
  }
}
