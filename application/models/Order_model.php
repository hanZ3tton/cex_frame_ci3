<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Order_model extends CI_Model
{
  protected $table = 'tb_order_member';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAll()
  {
    $this->db->select($this->table . '.*,tb_status.status_name,tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }

  public function get_order_by_status()
  {
    $this->db->select($this->table . '.*,tb_status.status_name,tb_status.label as status_label');
    $this->db->from($this->table);
    $this->db->join('tb_status', $this->table . '.status = tb_status.code', 'inner');
    $this->db->order_by("{$this->table}.code", 'DESC');
    return $this->db->get()->result();
  }
}
