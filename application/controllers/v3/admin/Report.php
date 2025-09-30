<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Report extends MY_Controller
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
    load_page__assets($this, 'report/list');

    $this->loadView('v3/admin/report/index', 'Shipment Reports', $data);
  }
  public function revanue_report()
  {
    $data = [];
    load_page__assets($this, 'report/list');

    $this->loadView('v3/admin/report/revanue_report', 'Shipment Reports', $data);
  }
}
