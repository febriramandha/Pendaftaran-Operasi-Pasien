<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level_M extends CI_Model
{
    public function getLvKompetensi($kompetensi_id)
    {
        $this->db->select('*');
        $this->db->from('level_kamus');
        $this->db->order_by('kode_level', 'ASC');
        $this->db->where('kompetensi_id', $kompetensi_id);
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }
}
