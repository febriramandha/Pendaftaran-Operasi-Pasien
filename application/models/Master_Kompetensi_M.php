<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Kompetensi_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*, kompetensi.id as komp_id, kompetensi.status as sts_komp');
        $this->db->from('kompetensi');
        $this->db->order_by('kode_kompetensi', 'ASC');
        if ($id != null) {
            $this->db->where('kompetensi.id', $id);
            $this->db->join('m_skj', 'kompetensi.m_skj_id=m_skj.id', 'left');
        }
        $this->db->where('kompetensi.status', '1');
        $query = $this->db->get();
        return $query;
    }
}
