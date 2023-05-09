<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_Operasi_M extends CI_Model
{
    var $table = 'pengumuman';

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('created_at', 'DESC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    public function save($post)
    {
        $params = [
            'judul' => $post['judul'],
            'uraian' => $post['uraian'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->fungsi->user_login()->id,
            'status' => '1',
        ];
        $this->db->insert('pengumuman', $params);
    }

    public function edit($post)
    {
        $params = [
            'judul' => $post['judul'],
            'uraian' => $post['uraian'],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->fungsi->user_login()->id,
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('pengumuman', $params);
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengumuman');
    }

    public function status($id)
    {
        $params = [
            'status' => 0,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->fungsi->user_login()->id,
        ];
        $this->db->where('id', $id);
        $this->db->update('pengumuman', $params);
    }
}
