<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Destinations_model extends CI_Model
{
    protected $table = 'tb_destinations';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        return $this->db->get()->result();
    }
}
