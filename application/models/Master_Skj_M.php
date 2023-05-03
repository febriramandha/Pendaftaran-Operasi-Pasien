<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_Skj_M extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('m_skj');
        $this->db->order_by('id', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }
}
