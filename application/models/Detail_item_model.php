<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail_item_model extends CI_Model
{
    protected $table = 'tb_order_member_detail_item';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll($awb)
    {
        $this->db->from($this->table);
        $this->db->where('cleansing_code', $awb);
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}
