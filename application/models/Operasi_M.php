<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operasi_M extends CI_Model
{
    var $table = 'operasi_ok';

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        if ($id != null) {
            $this->db->where('id_daftar_pasien', $id);
        }
        // $this->db->where('status', '1');
        $query = $this->db->get();
        return $query;
    }

    public function save($post)
    {
        $params = [
            'id_daftar_pasien' => $post['id_pasien'],
            'wkt_tunggu' => $post['wkt_tunggu'],
            'jam_sign_in' => $post['jam_sign_in'],
            'jam_time_out' => $post['jam_time_out'],
            'jam_sign_out' => $post['jam_sign_out'],
            'petugas_ok' => $post['petugas_ok'],
            'rencana_rawat' => $post['rencana_rawat'],
            'implan' => $post['implan'],
            'status_pasien_ok' => $post['status_pasien_ok'],
            'ket' => $post['ket'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->fungsi->user_login()->id,
            'status' => '1',
        ];
        $this->db->insert($this->table, $params);

        $st_daftar = [
            'status' => 3,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->fungsi->user_login()->id,
        ];
        $this->db->where('id', $post['id_pasien']);
        $this->db->update('daftar_operasi', $st_daftar);
    }

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
}
