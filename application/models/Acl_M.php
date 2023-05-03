<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acl_M extends CI_Model
{
    public function getAcl($id = null)
    {
        $this->db->select('*');
        $this->db->from('new_acl');
        $this->db->where('title !=', null);
        $this->db->where('status', 1);
        $this->db->where('parent', 0);
        $this->db->order_by('position', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
