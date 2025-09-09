<?php
class Role_model extends CI_Model
{
    public function getAllRole()
    {
        $query = $this->db->get('roles');
        return $query->result();
    }

    public function getRoleById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('roles');
        return $query->row();
    }

    public function createRole($data)
    {
        return $this->db->insert('role', $data);
    }

    public function updateRole($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('role', $data);
    }
    public function deleteRole($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('role');
    }
}
