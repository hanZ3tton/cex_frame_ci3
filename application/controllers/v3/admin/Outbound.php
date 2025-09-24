<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Outbound extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->defaultLayout = 'v3/layouts/app';
    $this->load->model('Outbound_model');
    $this->load->model('Detail_item_model');
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $outbound = 1;

    $data = [
      'orders' => $this->Outbound_model->get_outbound_by_status($outbound)
    ];

    $this->config->load('assets/outbound/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/outbound/index', 'List Outbound ', $data);
  }

  public function scanner()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Outbound_model->get_outbound_by_status($status_id)
    ];

    $this->config->load('assets/outbound/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/outbound/scanner', 'List Order Completed', $data);
  }
}
