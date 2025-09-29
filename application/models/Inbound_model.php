<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbound_model extends CI_Model
{
  protected $table = 'tb_order_inbound';

  const STATUS_CLAIMED = 3;
  const STATUS_VOID = 10;
  const STATUS_INBOUND = 15;

  public function __construct()
  {
    parent::__construct();
  }

  public function get_all_inbound()
  {
    $account = $this->session->userdata('account');

    $this->db->select("{$this->table}.*,
                         tb_status.status_name,
                         tb_status.label,
                         tb_user_agent.nama as cs_name");
    $this->db->from($this->table);
    $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
    $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
    $this->db->where_in("{$this->table}.status", [self::STATUS_INBOUND, self::STATUS_VOID]);

    if ($account) {
      $this->db->where("{$this->table}.account", $account);
    }

    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }

  public function get_inbound_by_status($status)
  {
    $account = $this->session->userdata('account');

    $this->db->select("{$this->table}.*,
                         tb_status.status_name,
                         tb_status.label,
                         tb_user_agent.nama as cs_name");
    $this->db->from($this->table);
    $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
    $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
    $this->db->where("{$this->table}.status", $status);

    if ($account) {
      $this->db->where("{$this->table}.account", $account);
    }

    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }

  public function get_inbound_by_code($code)
  {
    $this->db->select("{$this->table}.*,
                         tb_status.status_name,
                         tb_status.label,
                         tb_user_agent.nama as cs_name");
    $this->db->from($this->table);
    $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
    $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
    $this->db->where("{$this->table}.code", $code);
    return $this->db->get()->row();
  }

  public function insert($data)
  {
    return $this->db->insert($this->table, $data);
  }

  public function update($code, $data)
  {
    $this->db->where('code', $code);
    return $this->db->update($this->table, $data);
  }

  public function claim_to_receipt($code, $username, $account)
  {
    $inbound = $this->get_inbound_by_code($code);
    if (!$inbound) {
      throw new Exception("Inbound data not found for code: $code");
    }

    $time = time();
    $data = [
      'connote' => $time,
      'ship_account_number' => $account,
      'domestic_courier' => '',
      'domestic_awb' => '',
      'ship_account' => $account,
      'ship_ref' => '',
      'ship_address' => '',
      'ship_province' => '',
      'ship_city' => '',
      'ship_phone' => $inbound->shipper_phone,
      'ship_country' => strtoupper('indonesia'),
      'rec_account_number' => '',
      'rec_name' => '',
      'rec_ref' => '',
      'rec_address' => '',
      'rec_postcode' => '',
      'rec_city' => '',
      'rec_phone' => '',
      'rec_country' => '',
      'origin' => 'INDONESIA',
      'destination' => '',
      'weight' => $inbound->weight,
      'charge_weight' => ceil($inbound->weight),
      'number_of_pieces' => 0,
      'total_amount' => '0',
      'currency' => 'USD',
      'desc_of_goods' => $inbound->goods_desc,
      'notes' => '',
      'status' => (string) self::STATUS_CLAIMED,
      'mode' => '1',
      'updatedby' => $username,
      'updatedon' => date('Y-m-d H:i:s'),
      'sumber' => 'FRM',
      'value_of_goods' => '',
      'picture_of_goods' => '',
      'picture_of_paket' => '',
      'request_pickup' => '',
      'picture_of_idcard_receiver' => '',
      'payment_method' => '',
      'ship_postcode' => '',
      'tgl_kirim' => date('Y-m-d'),
      'inbound' => 1,
      'inbound_date' => $inbound->inbound_date,
      'outbound' => '0',
      'outbound_date' => '',
      'ongkir' => '0',
      'inbound_by' => $username,
      'service' => '',
      'arc_no' => '',
      'ship_name' => $inbound->shipper_name,
      'cs' => $inbound->cs,
    ];

    $this->input_cleansing($data);
    $insert_id = $this->db->insert_id();

    if (!$insert_id) {
      return false;
    }

    $data_item = [
      'connote'      => $account . '-' . $insert_id,
      'final_connote' => $insert_id,
    ];
    $this->update_cleansing($insert_id, $data_item);

    $this->update($code, ['status' => self::STATUS_CLAIMED]);

    return true;
  }

  public function soft_delete($code)
  {
    $this->db->where('code', $code);
    return $this->db->update($this->table, [
      'status' => self::STATUS_VOID
    ]);
  }

  public function delete($code)
  {
    return $this->db->delete($this->table, ['code' => $code]);
  }

  public function input_cleansing($data)
  {
    return $this->db->insert('tb_order_member', $data);
  }

  public function update_cleansing($code, $data)
  {
    $this->db->where('code', $code);
    return $this->db->update('tb_order_member', $data);
  }

  public function count_by_status($status_id)
  {
    $this->db->where('status', $status_id);
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }

  public function get_by_account($account)
  {
    $this->db->select($this->table . '.*,tb_status.status_name,tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->where($this->table . '.account', $account);
    $this->db->order_by($this->table . '.code', 'DESC');
    return $this->db->get()->result();
  }
}
