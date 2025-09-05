<?php
class User_model extends CI_Model
{

    public function getAllUser()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getUserById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function getUserByEmail($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function createUser($data)
    {
        return $this->db->insert('users', $data);
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}
