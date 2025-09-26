<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Cargo extends MY_Controller
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
    load_page__assets($this, 'cargo/list');

    $this->loadView('v3/admin/cargo/index', 'JNE Cargo List', $data);
  }

  public function create()
  {
    $data = [];

    $this->loadView('v3/admin/cargo/create', 'Create JNT Cargo Form', $data);
  }

  public function edit($id)
  {
    $data = [];

    $this->loadView('v3/admin/cargo/edit_cargo', 'Edit JNT Cargo Form', $data);
  }

  public function detail($id)
  {
    $data = [];

    $this->loadView('v3/admin/cargo/detail', 'JNT Cargo Details Form', $data);
  }
}
