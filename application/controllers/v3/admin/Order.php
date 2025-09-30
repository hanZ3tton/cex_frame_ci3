<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Order extends MY_Controller
{
  const STATUS_CLAIMED = 3;
  const STATUS_COMPLETED = 7;
  const MODE_FORM = 1;

  public function __construct()
  {
    parent::__construct();

    $this->defaultLayout = 'v3/layouts/app';
    $this->load->model('Order_model');
    $this->load->model('Dropdown_model');
    $this->load->model('Detail_item_model');
    $this->load->model('Mitra_model');
    $this->load->library('form_validation');
    if (!$this->session->userdata('logged_in')) {
      redirect('auth');
    }
  }

  private function is_order_cleansed($order)
  {
    return !empty($order->ship_name)
      && !empty($order->rec_name)
      && !empty($order->ship_address)
      && !empty($order->rec_postcode)
      && !empty($order->rec_city)
      && !empty($order->rec_phone)
      && !empty($order->destination)
      && !empty($order->desc_of_goods)
      && !empty($order->weight)
      && !empty($order->charge_weight)
      && !empty($order->ongkir);
  }

  private function has_order_invoice($code)
  {
    return (bool) $this->Detail_item_model->get_order_by_code($code);
  }

  private function is_order_paid($order)
  {
    return !empty($order->payment) && $order->payment == $order->ongkir;
  }

  public function index()
  {
    $status_id = self::STATUS_CLAIMED;
    $orders = $this->Order_model->get_order_by_status($status_id);

    $data_listing_final = [];
    foreach ($orders as $order) {
      $order->status_cleansing = $this->is_order_cleansed($order) ? 1 : 0;
      $order->status_invoice   = $this->has_order_invoice($order->code) ? 1 : 0;
      $order->status_payment   = $this->is_order_paid($order) ? 1 : 0;
      $data_listing_final[] = $order;
    }

    $data = [
      'orders' => $data_listing_final
    ];
    load_page__assets($this, 'order/list');

    $this->loadView('v3/admin/order/index', 'Order List', $data);
  }

  public function start_new_order()
  {
    $account = $this->session->userdata('account');
    $username = $this->session->userdata('username');
    $connote = $account . '-' . time();

    $data_order = [
      'connote' => $connote,
      'ship_account_number' => $account,
      'ship_account' => $account,
      'origin' => 'INDONESIA',
      'total_amount' => '0',
      'currency' => 'USD',
      'status' => (string) self::STATUS_CLAIMED,
      'mode' => (string) self::MODE_FORM,
      'updatedby' => $username,
      'updatedon' => date('Y-m-d H:i:s'),
      'sumber' => 'FRM',
      'tgl_kirim' => date('Y-m-d'),
      'inbound' => '0',
      'outbound' => '0',
      'ongkir' => '0',
      'number_of_pieces' => 1,
      'cs' => $username
    ];

    $this->db->trans_start();
    $this->Order_model->insert($data_order);
    $insert_id = $this->db->insert_id();
    $this->Order_model->update_by_code($insert_id, [
      'final_connote' => $insert_id
    ]);
    $this->db->trans_complete();

    redirect('v3/admin/order/create_cleansing/' . $insert_id);
  }

  public function create_cleansing($awb)
  {
    $status_id = self::STATUS_CLAIMED;
    $order = $this->Order_model->get_by_awb($awb);
    $code = $order->code;
    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id),
      'destinations' => $this->Dropdown_model->get_all_destinations(),
      'detail_item' => $this->Detail_item_model->get_order_by_code($code),
      'order' => $this->Order_model->get_by_awb($awb),
      'category' => $this->Dropdown_model->get_all_category()
    ];
    $data['services'] = [
      'Reguler' => 'REGULER',
      'Special' => 'SPECIAL',
      'Express' => 'EXPRESS',
      'Promo' => 'PROMO',
    ];
    load_page__assets($this, 'order/list');
    load_page__assets($this, 'order/calculate');

    $this->loadView('v3/admin/order/create', 'Create Cleansing', $data);
  }

  private function set_insert_order_rules()
  {
    $this->form_validation->set_rules('sender_name', 'Name', 'required|trim');
    $this->form_validation->set_rules('sender_phone', 'Phone', 'required|trim');
    $this->form_validation->set_rules('sender_address', 'Address', 'required|trim');
    $this->form_validation->set_rules('recipient_name', 'Name', 'required|trim');
    $this->form_validation->set_rules('recipient_phone', 'Phone', 'required|trim');
    $this->form_validation->set_rules('arc_no', 'ARC Number / Recipient ID', 'required|trim');
    $this->form_validation->set_rules('postal_code', 'Postal Code', 'required|trim');
    $this->form_validation->set_rules('city', 'City', 'required|trim');
    $this->form_validation->set_rules('country', 'Country', 'required|trim');
    $this->form_validation->set_rules('recipient_address', 'Recipient Address', 'required|trim');
    $this->form_validation->set_rules('package', 'Category', 'required|trim');
    $this->form_validation->set_rules('length', 'Length', 'required|trim|numeric');
    $this->form_validation->set_rules('width', 'Width', 'required|trim|numeric');
    $this->form_validation->set_rules('height', 'Height', 'required|trim|numeric');
    $this->form_validation->set_rules('weight', 'Weight', 'required|trim|numeric');
    $this->form_validation->set_rules('colli', 'Colli Total', 'required|trim|numeric');
    $this->form_validation->set_rules('service', 'Service', 'required|trim');
    $this->form_validation->set_rules('refference', 'Refference Number', 'required|trim');
  }

  private function sanitize_array($data)
  {
    $clean = [];
    foreach ($data as $key => $value) {
      $clean[$key] = $this->security->xss_clean(trim($value));
    }
    return $clean;
  }

  private function summarize_detail_items($awb)
  {
    $qty_total = 0;
    $customs_value = 0;
    $goods_desc_parts = [];
    $qry = $this->Detail_item_model->get_order_by_code($awb);
    foreach ($qry as $row) {
      $goods_desc_parts[] = $row->goods_category;
      $qty_total += (int) $row->qty;
      $customs_value += ((float) $row->price) * ((int) $row->qty);
    }
    $goods_desc = implode(',', $goods_desc_parts);
    return [
      'qty_total' => $qty_total,
      'customs_value' => $customs_value,
      'goods_desc' => $goods_desc,
    ];
  }

  private function calculate_charge_weight($weight)
  {
    return ceil($weight);
  }

  public function insert_detail_item($awb, $code)
  {
    $this->form_validation->set_rules('package_detail', 'Category', 'required');
    $this->form_validation->set_rules('item_name', 'Item Name', 'required');
    $this->form_validation->set_rules('qty', 'Quantity', 'required');
    $this->form_validation->set_rules('value', 'Value', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->create_cleansing($awb);
    } else {
      $data = [
        'cleansing_code' => $code,
        'goods_type' => $this->input->post('package_detail'),
        'goods_category' => $this->input->post('item_name'),
        'qty' => $this->input->post('qty'),
        'price' => $this->input->post('value'),
        'updatedon' => date('Y-m-d H:i:s'),
        'updatedby' => $this->session->userdata('username')
      ];
      $this->Detail_item_model->insert($data);
      redirect('v3/admin/order/create_cleansing/' . $awb);
    }
  }

  public function delete_detail_item($awb, $id)
  {
    $this->Detail_item_model->delete($id);
    redirect('v3/admin/order/create_cleansing/' . $awb);
  }

  public function insert_order_data($awb)
  {
    $this->set_insert_order_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->create_cleansing($awb);
    } else {
      try {
        $number_of_pieces = 1;
        $order = $this->Order_model->get_by_awb($awb);

        $summary = $this->summarize_detail_items($awb);
        $goods_desc = $summary['goods_desc'];
        $customs_value = $summary['customs_value'];
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
          'weight' => $this->input->post('weight'),
          'charge_weight' => $this->calculate_charge_weight($this->input->post('weight')),
          'number_of_pieces' => $number_of_pieces,
          'total_amount' => $customs_value,
          'currency' => 'USD',
          'desc_of_goods' => $goods_desc,
          'notes' => '',
          'status' => (string) self::STATUS_CLAIMED,
          'mode' => (string) self::MODE_FORM,
          'updatedby' => $username,
          'updatedon' => date('Y-m-d H:i:s'),
          'sumber' => 'FRM',
          'value_of_goods' => $customs_value,
          'picture_of_goods' => '',
          'picture_of_paket' => '',
          'request_pickup' => '0',
          'picture_of_idcard_receiver' => '',
          'payment_method' => 'DEPOSIT',
          'ship_postcode' => '0',
          'tgl_kirim' => date('Y-m-d'),
          'length' => $this->input->post('length'),
          'width' => $this->input->post('width'),
          'height' => $this->input->post('height'),
          'inbound_date' => '',
          'outbound' => '0',
          'outbound_date' => '',
          'ongkir' => $this->input->post('total_shipping_cost'),
          'inbound_by' => '',
          'service' => $this->input->post('service'),
          'arc_no' => $this->input->post('arc_no'),
          'jenis_paket' => $this->input->post('package'),
          'connote_reff' => $this->input->post('refference')
        ];
        // sanitize payload before saving
        $data = $this->sanitize_array($data);
        $this->Order_model->update($awb, $data);

        if ($order->code == $awb) {
          $data['final_connote'] = 'CEX' . rand(100000000, 9999999999);
        }

        if ($this->Order_model->update($awb, $data)) {
          $this->session->set_flashdata('success', 'Order with airwaybill <b>' . $awb . '</b> has been updated');
          redirect('admin/order');
        } else {
          $this->session->set_flashdata('error', 'Try Again Later');
          redirect('admin/order');
        }
      } catch (Exception $e) {
        log_message('error', 'Insert order data error: ' . $e->getMessage());
        $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
        redirect('admin/order');
      }
    }
  }

  public function pay($awb)
  {
    try {
      $account = $this->session->userdata('account');
      $mitra = $this->Mitra_model->getMitraByAccount($account);
      $order = $this->Order_model->get_by_awb($awb);

      if (!$order) {
        $this->session->set_flashdata('error', 'Order tidak ditemukan!');
        redirect('admin/order');
        return;
      }

      $exchange_rate = 16721; // USD to IDR
      $pay = $mitra->deposit_balance - ($order->ongkir * $exchange_rate);

      $data_mitra = [
        'deposit_balance' => $pay
      ];

      if ($this->Mitra_model->updateMitra($account, $data_mitra)) {
        $data_order = [
          'payment' => $order->ongkir,
          'status' => (string) self::STATUS_COMPLETED,
          'updatedby' => $this->session->userdata('username'),
          'updatedon' => date('Y-m-d H:i:s'),
        ];

        $this->session->set_userdata('credit', $mitra->deposit_balance);

        if ($this->Order_model->update($awb, $data_order)) {
          $this->session->set_flashdata('success', 'Order with airwaybill <b>' . $awb . '</b> has been paid');
        } else {
          $this->session->set_flashdata('error', 'Gagal update status order!');
        }
      } else {
        $this->session->set_flashdata('error', 'Gagal update saldo mitra!');
      }
    } catch (Exception $e) {
      log_message('error', 'Pay order error: ' . $e->getMessage());
      $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    redirect('admin/order');
  }

  public function completed()
  {
    $status_id = self::STATUS_COMPLETED;

    $data = [
      'orders' => $this->Order_model->get_order_by_status($status_id)
    ];
    load_page__assets($this, 'order/list');

    $this->loadView('v3/admin/order/completed', 'List Order Completed', $data);
  }

  public function set_outbound($awb)
  {
    try {
      $order = $this->Order_model->get_by_awb($awb);

      if (!$order) {
        $this->session->set_flashdata('error', 'Data tidak ditemukan!');
        redirect('admin/order/completed');
        return;
      }

      $data = [
        'branch_outbound' => 1
      ];

      if ($this->Order_model->update_outbound($awb, $data)) {
        $this->session->set_flashdata('success', 'Branch outbound berhasil diupdate!');
      } else {
        $this->session->set_flashdata('error', 'Gagal update branch outbound!');
      }
    } catch (Exception $e) {
      log_message('error', 'Set outbound error: ' . $e->getMessage());
      $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    redirect('admin/order/completed');
  }

  public function cancel_order($awb)
  {
    try {
      $order = $this->Order_model->get_by_awb($awb);

      if (!$order) {
        $this->session->set_flashdata('error', 'Order tidak ditemukan!');
        redirect('admin/order');
        return;
      }

      if ($this->Order_model->soft_delete($awb)) {
        $this->session->set_flashdata('success', 'Order with airwaybill <b>' . $awb . '</b> has been cancelled');
      } else {
        $this->session->set_flashdata('error', 'Gagal membatalkan order!');
      }
    } catch (Exception $e) {
      log_message('error', 'Cancel order error: ' . $e->getMessage());
      $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }

    redirect('admin/order');
  }
}
