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
    load_page__assets($this, 'tracking/list');

    $this->loadView('v3/admin/tracking/index', 'Tracking List', $data);
  }
}
