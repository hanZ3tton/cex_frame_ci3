<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Reports extends MY_Controller
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

    $this->config->load('assets/report/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/reports/index', 'Transaction Reports', $data);
  }
  public function manifest_reports()
  {
    $data = [];

    $this->config->load('assets/report/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/reports/manifest_reports', 'Manifest Reports', $data);
  }
}
