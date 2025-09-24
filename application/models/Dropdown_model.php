<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dropdown_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_destinations()
    {
        $this->db->from('tb_destinations');
        return $this->db->get()->result();
    }
    public function get_all_category()
    {
        $this->db->from('tb_commodity');
        return $this->db->get()->result();
    }

    public function get_all_service()
    {
        $this->db->from('tb_commodity');
        return $this->db->get()->result();
    }
}
