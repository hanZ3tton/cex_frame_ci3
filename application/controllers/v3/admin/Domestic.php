<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Domestic extends MY_Controller
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
    load_page__assets($this, 'domestic/list');

    $this->loadView('v3/admin/domestic/index', 'Exsys Shipment', $data);
  }

  public function jnt_express()
  {
    $data = [];
    load_page__assets($this, 'domestic/list');

    $this->loadView('v3/admin/domestic/jnt_express', 'JNT Express', $data);
  }

  public function create()
  {
    $data = [];

    $this->loadView('v3/admin/domestic/create', 'Create Order', $data);
  }

  public function detailandtracking()
  {
    $data = [];

    $this->loadView('v3/admin/domestic/detailandtracking', 'Detail And Tracking Information', $data);
  }
}
