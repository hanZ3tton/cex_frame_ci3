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
    $this->load->model('Detail_item_model');
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

  public function create_empty_data()
  {

    $time = time();
    $account = $this->session->userdata('account');
    $username = $this->session->userdata('username');
    $data_order = [
      'connote' => $time,
      'ship_account_number' => $account,
      'ship_account' => $account,
      'origin' => 'INDONESIA',
      'number_of_pieces' => '0',
      'total_amount' => '0',
      'currency' => 'USD',
      'status' => '3',
      'mode' => '1',
      'updatedby' => $username,
      'updatedon' => date('Y-m-d H:i:s'),
      'sumber' => 'FRM',
      'tgl_kirim' => null,
      'inbound' => '0',
      'outbound' => '0',
      'ongkir' => '0',
      'number_of_pieces' => 1, // Add default number of pieces
      'cs' => $username
    ];
    $this->Order_model->insert($data_order);
    $insert_id = $this->db->insert_id();
    $data_item = [
      'connote' => $account . '-' . $insert_id,
      'final_connote' => $insert_id,
    ];
    $this->Order_model->update($insert_id, $data_item);
    redirect('v3/admin/order/create_form/' . $insert_id);
  }


  public function create_form($awb)
  {
    $status_id = 3;
    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id),
      'destinations' => $this->Destinations_model->getAll(),
      'final_connote' => $awb,
      'detail_item' => 0
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);
    $this->loadView('v3/admin/order/create', 'Create Order', $data);
  }

  public function edit($awb)
  {
    $status_id = 3;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id),
      'destinations' => $this->Destinations_model->getAll(),
      'final_connote' => $awb,
      'detail_item' => $this->Detail_item_model->getAll($awb)
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');

    $this->config->load('assets/_partials/dataTables');
    $datatables_assets = $this->config->item('assets');

    $this->pageScripts = array_merge($datatables_assets['js'], $page_assets['js']);
    $this->pageStyles = array_merge($datatables_assets['css'], $page_assets['css']);
    $this->loadView('v3/admin/order/create', 'Update Order', $data);
  }

  public function insert_detail_item($awb)
  {
    $this->form_validation->set_rules('package_detail', 'Category', 'required');
    $this->form_validation->set_rules('item_name', 'Item Name', 'required');
    $this->form_validation->set_rules('qty', 'Quantity', 'required');
    $this->form_validation->set_rules('value', 'Value', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->edit($awb);
    } else {
      $data = [
        'cleansing_code' => $awb,
        'goods_type' => $this->input->post('package_detail'),
        'goods_category' => $this->input->post('item_name'),
        'qty' => $this->input->post('qty'),
        'price' => $this->input->post('value'),
      ];
      $this->Detail_item_model->insert($data);
      redirect('v3/admin/order/edit/' . $awb);
    }
  }

  public function update_order($awb)
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
      $this->edit($awb);
    } else {
      $number_of_pieces = 1; //default
      $vendor_awb = $awb;
      $qty = 0;
      $customs_value = 0;
      $qry =  $this->Detail_item_model->getAll($awb);
      foreach ($qry as $row) {
        $goods_desc = $row->goods_category . ',';
        $qty += $row->qty;
        $customs_value += $row->price * $row->qty;
      }

      $goods_desc = "";
      $account = $this->session->userdata('account');
      $username = $this->session->userdata('username');
      $data = [
        'ship_account' => $account,
        'ship_name' => $this->input->post('sender_name'),
        'ship_ref' => $this->input->post('sender_name'),
        'ship_address' => $this->input->post('sender_address'),
        'ship_province' => '',
        'ship_city' => '',
        'ship_phone' => $this->input->post('sender_phone'),
        'ship_country' => 'INDONESIA',
        'rec_account_number' => '',
        'rec_name' => $this->input->post('recipient_name'),
        'rec_ref' => $this->input->post('recipient_name'),
        'rec_address' => $this->input->post('recipient_address'),
        'rec_postcode' => $this->input->post('postal_code'),
        'rec_city' => $this->input->post('city'),
        'rec_phone' => $this->input->post('recipient_phone'),
        'rec_country' => $this->input->post('country'),
        'origin' => 'INDONESIA',
        'destination' => $this->input->post('country'),
        'weight' => $this->input->post('berat'),
        'charge_weight' => ceil($this->input->post('berat')),
        'number_of_pieces' => $number_of_pieces,
        'total_amount' => $customs_value,
        'currency' => 'USD',
        'desc_of_goods' => $goods_desc,
        'notes' => '',
        'status' => '3',
        'mode' => '1',
        'updatedby' => $username,
        'updatedon' => date('Y-m-d H:i:s'),
        'sumber' => 'FRM',
        'value_of_goods' => $customs_value,
        'picture_of_goods' => '',
        'picture_of_paket' => '',
        'request_pickup' => '0',
        'picture_of_idcard_receiver' => '',
        'final_connote' => $vendor_awb,
        'payment_method' => 'DEPOSIT',
        'ship_postcode' => '0',
        'tgl_kirim' => date('Y-m-d'),
        'inbound' => '0',
        'inbound_date' => '',
        'outbound' => '0',
        'outbound_date' => '',
        'ongkir' => $this->input->post('ongkir'),
        'inbound_by' => '',
        'service' => $this->input->post('service'),
        'arc_no' => $this->input->post('arc_no'),
        'jenis_paket' => $this->input->post('jenis'),
        'connote_reff' => $this->input->post('refference')
      ];
      if ($this->Order_model->update($awb, $data)) {
        redirect('admin/list_order');
      }
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

  public function outbound_scanner()
  {
    $status_id = 7;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];

    $this->config->load('assets/order');
    $page_assets = $this->config->item('assets');
    $this->pageScripts =  $page_assets['js'];
    $this->pageStyles =  $page_assets['css'];
    $this->loadView('v3/admin/order/obscan', 'List Order Completed', []);
  }
}
