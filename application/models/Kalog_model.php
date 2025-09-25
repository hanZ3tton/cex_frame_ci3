<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kalog_model extends CI_Model
{
  protected $table = 'tb_kalog';

  public function __construct()
  {
    parent::__construct();
  }

  public function get_all_data_kalog()
  {
    $ship_account = $this->session->userdata('account');
    $this->db->select($this->table . '.*,
                        tb_status.status_name,
                        tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->where("{$this->table}.status", 1);
    $this->db->where("{$this->table}.ship_account", $ship_account);
    $this->db->order_by("{$this->table}.id", 'DESC');
    return $this->db->get()->result();
  }

  // public function get_inbound_by_status($status)
  // {
  //   $this->db->select("{$this->table}.*,
  //                        tb_status.status_name,
  //                        tb_status.label,
  //                        tb_user_agent.nama as cs_name");
  //   $this->db->from($this->table);
  //   $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
  //   $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
  //   $this->db->where("{$this->table}.status", $status);
  //   return $this->db->get()->result();
  // }

  // public function get_inbound_by_code($code)
  // {
  //   $this->db->select("{$this->table}.*,
  //                        tb_status.status_name,
  //                        tb_status.label,
  //                        tb_user_agent.nama as cs_name");
  //   $this->db->from($this->table);
  //   $this->db->join('tb_status', "{$this->table}.status = tb_status.code", 'inner');
  //   $this->db->join('tb_user_agent', "{$this->table}.cs = tb_user_agent.username", 'left');
  //   $this->db->where("{$this->table}.code", $code);
  //   return $this->db->get()->row(); // karena code unik, ambil 1 row aja
  // }

  // public function insert($data)
  // {
  //   return $this->db->insert($this->table, $data);
  // }

  // public function update($code, $data)
  // {
  //   $this->db->where('code', $code);
  //   return $this->db->update($this->table, $data);
  // }

  // public function soft_delete($code)
  // {
  //   $this->db->where('code', $code);
  //   return $this->db->update($this->table, [
  //     'status' => 10
  //   ]);
  // }

  // public function delete($code)
  // {
  //   return $this->db->delete($this->table, ['code' => $code]);
  // }
}
