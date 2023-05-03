<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_Unor_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('new_simpeg.jabatan');
        $this->db->order_by('id', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    public function totJabatanUnor()
    {
        $this->db->select('COUNT(id) as total');
        $this->db->from('new_simpeg.jabatan');
        $this->db->where('status', '1');
        $query = $this->db->get_where()->row();
        return $query;
    }
}
