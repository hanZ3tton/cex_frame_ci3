<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inbound_model extends CI_Model
{
  protected $table = 'tb_order_inbound';

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

    if ($account) {
      $this->db->where("{$this->table}.account", $account);
    }

    return $this->db->get()->result();
  }

  public function get_inbound_by_status($status = 15)
  {
    $this->db->select("{$this->table}.*,
                         tb_status.status_name,
                         tb_status.label,
                         tb_user_agent.nama as cs_name");
    $this->db->from($this->table);
    $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
    $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
    $this->db->where("{$this->table}.status", $status);
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
    return $this->db->get()->row(); // karena code unik, ambil 1 row aja
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

  public function delete($code)
  {
    return $this->db->delete($this->table, ['code' => $code]);
  }

  public function count_all_inbound()
  {
    return $this->db->count_all($this->table);
  }

  public function count_by_status($status_code)
  {
    $this->db->where('status', $status_code);
    return $this->db->count_all_results($this->table);
  }
}
