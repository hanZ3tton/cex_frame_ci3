<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inbound_model extends CI_Model
{
  protected $table = 'tb_order_inbound';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllInbound()
  {
    $this->db->select($this->table . '.*,tb_status.status_name,tb_status.label, tb_user_agent.nama as cs_name');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->join('tb_user_agent', $this->table . '.cs = tb_user_agent.username', 'left');
    return $this->db->get()->result();
  }
}
