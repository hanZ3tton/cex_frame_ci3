<?php
class Role_model extends CI_Model
{
    public function get_all_role()
    {
        $query = $this->db->get('roles');
        return $query->result();
    }

    public function get_role_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('roles');
        return $query->row();
    }

    public function create_role($data)
    {
        return $this->db->insert('role', $data);
    }

    public function update_role($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('role', $data);
    }
    public function delete_role($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('role');
    }
}
