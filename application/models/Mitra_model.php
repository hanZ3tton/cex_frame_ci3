<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mitra_model extends CI_Model
{
    public function getMitraByAccount($account)
    {
        $this->db->where('account', $account);
        $query = $this->db->get('tb_mitra');
        return $query->row();
    }
    public function updateMitra($account, $data)
    {
        $this->db->where('account', $account);
        return $this->db->update('tb_mitra', $data);
    }
}
