<?php
class User_model extends CI_Model
{

    public function get_all_user()
    {
        $account  = $this->session->userdata('account');
        $this->db->where('account', $account);
        $this->db->where('grup <>', 'ADMIN');
        $query = $this->db->get('tb_user_agent');
        return $query->result();
    }

    public function get_all_cs()
    {
        $account  = $this->session->userdata('account');
        $this->db->where('account', $account);
        $this->db->where('grup', 'CS');
        $query = $this->db->get('tb_user_agent');
        return $query->result();
    }

    public function get_user_by_code($id)
    {
        $this->db->where('code', $id);
        $query = $this->db->get('tb_user_agent');
        return $query->row();
    }

    public function get_user_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_user_agent');
        return $query->row();
    }

    public function create_user($data)
    {
        return $this->db->insert('tb_user_agent', $data);
    }

    public function update_user($id, $data)
    {
        $this->db->where('code', $id);
        return $this->db->update('tb_user_agent', $data);
    }
    public function delete_user($id)
    {
        $this->db->where('code', $id);
        return $this->db->delete('tb_user_agent');
    }
}
