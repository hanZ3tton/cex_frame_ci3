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
    $flag = 1;

    $data = [
      'orders' => $this->Outbound_model->get_outbound_by_flag($flag)
    ];
    load_page__assets($this, 'outbound/list');


    $this->loadView('v3/admin/outbound/index', 'List Outbound ', $data);
  }

  public function scanner()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Outbound_model->get_outbound_by_status($status_id)
    ];
    load_page__assets($this, 'outbound/list');

    $this->loadView('v3/admin/outbound/scanner', 'List Order Completed', $data);
  }
}
