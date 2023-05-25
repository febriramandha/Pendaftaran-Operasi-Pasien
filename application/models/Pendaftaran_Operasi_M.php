<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_Operasi_M extends CI_Model
{
    var $table = 'daftar_operasi';

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('tgl_operasi', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        // $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    public function save($post)
    {
        $params = [
            'tgl_operasi' => $post['tgl_operasi'],
            'jam_rencana_tindakan' => $post['jam_rencana_tindakan'],
            'nama_pasien' => $post['nama_pasien'],
            'no_mr' => $post['no_mr'],
            'tgl_lahir' => $post['tgl_lahir'],
            'umur' => $post['umur'],
            'jekel' => $post['jenis_kelamin'],
            'nama_ruangan' => $post['nama_ruangan'],
            'diagnosa' => $post['diagnosa'],
            'rencana_tindakan' => $post['rencana_tindakan'],
            'nama_dpjp' => $post['dpjp_operator'],
            'jenis_anastesi' => $post['jenis_anastesi'],
            'jenis_pembayaran' => $post['jenis_pembayaran'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->fungsi->user_login()->id,
            'status' => '1',
        ];
        $this->db->insert($this->table, $params);
    }

    // public function edit($post)
    // {
    //     $params = [
    //         'judul' => $post['judul'],
    //         'uraian' => $post['uraian'],
    //         'updated_at' => date('Y-m-d H:i:s'),
    //         'updated_by' => $this->fungsi->user_login()->id,
    //     ];
    //     $this->db->where('id', $post['id']);
    //     $this->db->update($this->table, $params);
    // }

    // public function del($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete($this->table);
    // }

    public function status($id, $st)
    {
        $params = [
            'status' => $st,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->fungsi->user_login()->id,
        ];
        $this->db->where('id', $id);
        $this->db->update($this->table, $params);
    }

    public function totPasien()
    {
        $this->db->select('COUNT(id) as total');
        $this->db->from($this->table);
        $query = $this->db->get_where()->row();
        return $query;
    }
}
