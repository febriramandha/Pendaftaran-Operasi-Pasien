<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skj_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('skj');
        $this->db->order_by('kelompok_jabatan_id', 'ASC');
        $this->db->join('kelompok_jabatan', 'kelompok_jabatan.id = skj.kelompok_jabatan_id', 'left');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('skj.status', '1');
        $query = $this->db->get();
        return $query;
    }
}
