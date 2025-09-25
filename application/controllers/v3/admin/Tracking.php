<?php
defined('BASEPATH') or exit('no direct script access allowed');

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

  public function index()
  {
    $data = [];

    $this->config->load('assets/tracking/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/tracking/index', 'Tracking List', $data);
  }

  public function jnt_express()
  {
    $data = [];

    $this->config->load('assets/domestic/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts = $page_assets['js'];
    $this->pageStyles = $page_assets['css'];

    $this->loadView('v3/admin/domestic/jnt_express', 'JNT Express', $data);
  }

  public function create()
  {
    $data = [];

    $this->config->load('assets/domestic/form');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/create', 'Create Order', $data);
  }

  public function detailandtracking()
  {
    $data = [];

    $this->config->load('assets/domestic/form');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/detailandtracking', 'Detail And Tracking Information', $data);
  }
}
