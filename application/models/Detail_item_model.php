<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_item_model extends CI_Model
{
    protected $table = 'tb_order_member_detail_item';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_order_by_code($code)
    {
        $this->db->from($this->table);
        $this->db->where('cleansing_code', $code);
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('code', $id);
        $this->db->delete($this->table);
    }
}
