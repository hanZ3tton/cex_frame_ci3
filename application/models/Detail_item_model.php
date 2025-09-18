<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Destinations_model extends CI_Model
{
    protected $table = 'tb_order_member_detail_item';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll($cleansing_code)
    {
        $this->db->from($this->table);
        $this->db->where('cleansing_code', $cleansing_code);
        return $this->db->get()->result();
    }
}
