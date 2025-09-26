<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Data_ho extends MY_Controller
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
    load_page__assets($this, 'data_ho/list');

    $this->loadView('v3/admin/data_ho/index', 'Data Head Office', $data);
  }

  public function inbound()
  {
    $data = [];
    load_page__assets($this, 'data_ho/list');

    $this->loadView('v3/admin/data_ho/inbound', 'Direct Inbound Head Office', $data);
  }

  public function cleansing()
  {
    $data = [];
    load_page__assets($this, 'data_ho/list');

    $this->loadView('v3/admin/data_ho/cleansing', 'Not Completed', $data);
  }
}
