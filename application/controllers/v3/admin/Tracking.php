<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->defaultLayout = 'v3/layouts/app';
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  // public function index()
  // {
  //   $data = [];

  //   $this->config->load('assets/topup/list');
  //   $page_assets = $this->config->item('assets');
  //   $this->pageScripts = $page_assets['js'];
  //   $this->pageStyles = $page_assets['css'];

  //   $this->loadView('v3/admin/tracking/index', 'Tracking', $data);
  // }

  // public function create()
  // {
  //   $data = [];

  //   $this->config->load('assets/topup/form');
  //   $page_assets = $this->config->item('assets');
  //   $this->pageScripts = $page_assets['js'];
  //   $this->pageStyles = $page_assets['css'];

  //   $this->loadView('v3/admin/topup/create', 'Deposit', $data);
  // }
}
