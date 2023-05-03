<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator_Kinerja_M extends CI_Model
{
    public function getIndikator($master_kinerja_id)
    {
        $this->db->select('*');
        $this->db->from('kinerja');
        $this->db->where('master_kinerja_id', $master_kinerja_id);
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }
}
