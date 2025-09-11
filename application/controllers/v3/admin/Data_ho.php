<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Data_ho extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    if (!$this->session->userdata('logged_in')) {
      redirect('v3/auth');
    }
  }

  public function index()
  {
    $data = [];

    $this->config->load('assets/inbound');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/data_ho/index', 'Data Head Office', $data);
  }

  public function create()
  {
    $data = [];

    $this->config->load('assets/add');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/create', 'Create Order', $data);
  }
  public function detailandtracking()
  {
    $data = [];

    $this->config->load('assets/add');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/detailandtracking', 'Detail And Tracking Information', $data);
  }
}
