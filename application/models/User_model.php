<?php
class User_model extends CI_Model
{

    public function getAllUser()
    {
        $query = $this->db->get('tb_user_agent');
        return $query->result();
    }

    public function getUserByCode($id)
    {
        $this->db->where('code', $id);
        $query = $this->db->get('tb_user_agent');
        return $query->row();
    }

    public function getUserByUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_user_agent');
        return $query->row();
    }

    public function createUser($data)
    {
        return $this->db->insert('tb_user_agent', $data);
    }

    public function updateUser($id, $data)
    {
        $this->db->where('code', $id);
        return $this->db->update('tb_user_agent', $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('code', $id);
        return $this->db->delete('tb_user_agent');
    }
}
