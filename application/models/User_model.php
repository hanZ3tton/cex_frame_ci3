<?php
class User_model extends CI_Model
{
    protected $table = 'tb_user_agent';
    public function get_all_user()
    {
        $this->db->from($this->table);
        $account  = $this->session->userdata('account');
        $this->db->where('account', $account);
        $this->db->where('grup <>', 'ADMIN');
        return $this->db->get()->result();
    }

    public function get_all_cs()
    {
        $this->db->from($this->table);
        $account  = $this->session->userdata('account');
        $this->db->where('account', $account);
        $this->db->where('grup', 'CS');
        return $this->db->get('tb_user_agent');
    }

    public function get_user_by_code($code)
    {
        $this->db->from($this->table);
        $this->db->where('code', $code);
        return $this->db->get()->row();
    }

    public function get_user_by_username($username)
    {
        $this->db->from($this->table);
        $this->db->where('username', $username);
        return $this->db->get()->row();
    }

    public function create_user($data)
    {

        return $this->db->insert($this->table, $data);
    }

    public function update_user($code, $data)
    {
        $this->db->where('code', $code);
        return $this->db->update($this->table, $data);
    }
    public function delete_user($code)
    {
        $this->db->where('code', $code);
        return $this->db->delete($this->table);
    }
}
