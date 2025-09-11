<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Order extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    $this->load->model('Order_model');
    if (!$this->session->userdata('logged_in')) {
      redirect('v3/auth');
    }
  }

  public function index()
  {
    $data = [
      'orders' => $this->Order_model->getAll()
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/order/index', 'Order List', $data);
  }

  public function completed()
  {
    $data = [
      'orders' => $this->Order_model->getAll()
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/order/completed', 'List Order Completed', $data);
  }
}
