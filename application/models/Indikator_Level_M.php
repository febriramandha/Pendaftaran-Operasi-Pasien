<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indikator_Level_M extends CI_Model
{
    public function getByLevel($level_kamus_id)
    {
        $this->db->select('*');
        $this->db->from('indikator_level');
        $this->db->order_by('id', 'ASC');
        $this->db->where('level_kamus_id', $level_kamus_id);
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }
}
