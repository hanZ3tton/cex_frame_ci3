<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
  protected $table = 'tb_order_member';

  // Status and mode constants (single source of truth)
  const STATUS_CLAIMED = 3;
  const STATUS_COMPLETED = 7;
  const STATUS_VOID = 10;
  const MODE_FORM = 1;

  public function __construct()
  {
    parent::__construct();
  }

  public function get_by_awb($awb)
  {
    $this->db->from($this->table);
    $this->db->where('final_connote', $awb);
    return $this->db->get()->row();
  }

  public function get_by_code($code)
  {
    $this->db->from($this->table);
    $this->db->where('code', $code);
    return $this->db->get()->row();
  }

  public function get_all()
  {
    $this->db->select($this->table . '.*,tb_status.status_name,tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }

  public function get_order_by_status($status_id)
  {
    $account = $this->session->userdata('account');

    $this->db->select($this->table . '.*,
                        tb_status.status_name,
                        tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->order_by("{$this->table}.code", 'DESC');
    $this->db->where("{$this->table}.status", $status_id);
    $this->db->where("{$this->table}.branch_outbound", 0);

    if ($account) {
      $this->db->where("{$this->table}.ship_account", $account);
    }

    return $this->db->get()->result();
  }

  public function insert($data)
  {
    return $this->db->insert($this->table, $data);
  }

  public function update_by_code($code, $data)
  {
    $this->db->where('code', $code);
    return $this->db->update($this->table, $data);
  }

  public function update($awb, $data)
  {
    $this->db->where('final_connote', $awb);
    return $this->db->update($this->table, $data);
  }

  public function update_outbound($awb, $data)
  {
    $this->db->where('final_connote', $awb);
    return $this->db->update($this->table, $data);
  }

  public function soft_delete($awb)
  {
    $order = $this->get_by_awb($awb);

    $this->db->where('final_connote', $awb)->update($this->table, ['status' => 10]);
    $this->db->where('code', $order->code)->update('tb_order_inbound', ['status' => 10]);
  }

  public function delete($awb)
  {
    $this->db->where('final_connote', $awb);
    return $this->db->delete($this->table);
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
    $this->db->where("{$this->table}.ship_account", $account);
    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }
}
