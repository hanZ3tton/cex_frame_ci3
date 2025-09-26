<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Outbound_model extends CI_Model
{
  protected $table = 'tb_order_member';

  public function __construct()
  {
    parent::__construct();
  }

  public function get_outbound_by_flag($flag)
  {
    $account = $this->session->userdata('account');

    $this->db->select("{$this->table}.*,
                         tb_status.status_name,
                         tb_status.label as status_label");
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->order_by("{$this->table}.code", 'DESC');
    $this->db->where("{$this->table}.ship_account_number", $account);
    $this->db->where("{$this->table}.branch_outbound", $flag);
    return $this->db->get()->result();
  }
}
