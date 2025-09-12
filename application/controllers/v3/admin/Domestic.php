<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Domestic extends MY_Controller
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

    $this->config->load('assets/topup');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/index', 'Domestic', $data);
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
  public function exsys_shipment()
  {
    $data = [];

    $this->config->load('assets/topup');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/exsys_shipment', 'Exsys Shipment', $data);
  }
}
