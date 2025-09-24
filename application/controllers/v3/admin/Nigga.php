<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Nigga extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  public function form()
  {
    $data = [];

    $this->config->load('assets/Nigga/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/nigga/form', 'Exsys Shipment', $data);
  }
  public function index()
  {
    $data = [];

    $this->config->load('assets/Nigga/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/nigga/index', 'Exsys Shipment', $data);
  }
}
