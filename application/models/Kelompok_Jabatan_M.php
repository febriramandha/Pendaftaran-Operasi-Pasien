<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok_Jabatan_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('kelompok_jabatan');
        $this->db->order_by('kode_kelompok', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }
}
