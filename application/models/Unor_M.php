<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unor_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('new_simpeg.unor');
        $this->db->order_by('id', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('status', '1');
        $this->db->where('nama_unor !=', 'null');
        $query = $this->db->get();
        return $query;
    }
}