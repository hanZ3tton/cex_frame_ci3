<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Domestic extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    if (!$this->session->userdata('logged_in')) {
      redirect('v3/auth');
    }
  }

  public function jnt_express()
  {
    $data = [];

    $this->config->load('assets/domestic');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

    $this->loadView('v3/admin/domestic/jnt_express', 'Domestic', $data);
  }

  public function shipment()
  {
    $data = [];

    $this->config->load('assets/topup');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

    $this->loadView('v3/admin/domestic/shipment', 'Exsys Shipment', $data);
  }

  public function create()
  {
    $data = [];

    $this->config->load('assets/add');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/create', 'Create Order', $data);
  }

  public function detailandtracking()
  {
    $data = [];

    $this->config->load('assets/add');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/domestic/detailandtracking', 'Detail And Tracking Information', $data);
  }
}
