<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Order extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    $this->load->model('Order_model');
    $this->load->model('Destinations_model');
    $this->load->library('form_validation');
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $status_id = 3;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

    $this->loadView('v3/admin/order/index', 'Order List', $data);
  }

  public function create()
  {
    $status_id = 3;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id),
      'destinations' => $this->Destinations_model->getAll()
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);

    $this->loadView('v3/admin/order/create', 'Create Order', $data);
  }
  public function store()
  {
    $this->form_validation->set_rules('sender_name', 'Name', 'required');
    $this->form_validation->set_rules('sender_phone', 'Phone', 'required');
    $this->form_validation->set_rules('sender_address', 'Address', 'required');
    $this->form_validation->set_rules('recipient_name', 'Name', 'required');
    $this->form_validation->set_rules('recipient_phone', 'Phone', 'required');
    $this->form_validation->set_rules('recipient_id', 'ARC Number / Recipient ID', 'required');
    $this->form_validation->set_rules('postal_code', 'Postal Code', 'required');
    $this->form_validation->set_rules('city', 'City', 'required');
    $this->form_validation->set_rules('country', 'Country', 'required');
    $this->form_validation->set_rules('recipient_address', 'Recipient Address', 'required');
    $this->form_validation->set_rules('package', 'Category', 'required');
    $this->form_validation->set_rules('length', 'Length', 'required');
    $this->form_validation->set_rules('width', 'Width', 'required');
    $this->form_validation->set_rules('height', 'Height', 'required');
    $this->form_validation->set_rules('weight', 'Weight', 'required');
    $this->form_validation->set_rules('colli', 'Colli Total', 'required');
    $this->form_validation->set_rules('service', 'Service', 'required');
    $this->form_validation->set_rules('refference', 'Refference Number', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->create();
    } else {
      $data = [];
    }
  }

  public function completed()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($page_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $datatables_assets['css']);

    $this->loadView('v3/admin/order/completed', 'List Order Completed', $data);
  }

  public function outbound()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];

    $this->loadView('v3/admin/order/outbound', 'List Order Completed', $data);
  }
}
