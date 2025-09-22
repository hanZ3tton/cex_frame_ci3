<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Outbound extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    $this->load->model('Order_model');
    $this->load->model('Destinations_model');
    $this->load->model('Detail_item_model');
    $this->load->library('form_validation');
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/outbound/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/outbound/index', 'List Order Completed', $data);
  }

  public function scanner()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/outbound/list');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/outbound/scanner', 'List Order Completed', []);
  }
}
