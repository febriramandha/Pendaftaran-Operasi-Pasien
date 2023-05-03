<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_M extends CI_Model
{
    // start datatables
    var $column_order = array(null, 'gelar_depan', 'gelar_blkng', 'nama_pegawai', 'nip'); //set column field database for datatable orderable
    var $column_search = array('gelar_depan', 'gelar_blkng', 'nama_pegawai', 'nip'); //set column field database for datatable searchable
    var $order = array('id' => 'ASC'); // default order 

    private function _get_datatables_query()
    {
        $this->db->select('*, pegawai.status as stat_peg');
        $this->db->from('new_simpeg.pegawai');
        $this->db->join('new_simpeg.detail_jabatan', 'detail_jabatan.id = pegawai.detail_jabatan_id', 'left');
        $this->db->join('new_simpeg.unor', 'unor.id = detail_jabatan.unor_id', 'left');
        $this->db->join('new_simpeg.jabatan', 'jabatan.id = detail_jabatan.jabatan_id', 'left');
        $this->db->order_by('nama_pegawai', 'ASC');
        $this->db->order_by('detail_jabatan.unor_id', 'ASC');
        $this->db->where('nama_pegawai !=', '-');
        $this->db->where('pegawai.status', '1');

        $i = 0;
        foreach ($this->column_search as $peg) { // loop column 
            if (@$_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($peg, $_POST['search']['value']);
                } else {
                    $this->db->or_like($peg, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables()
    {
        $this->_get_datatables_query();
        if (@$_POST['length'] != -1)
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all()
    {
        $this->db->from('new_simpeg.pegawai');
        return $this->db->count_all_results();
    }
    // end datatables

    public function get($id = null)
    {
        $this->db->select('*, pegawai.status as stat_peg');
        $this->db->from('new_simpeg.pegawai');
        $this->db->join('new_simpeg.detail_jabatan', 'detail_jabatan.id = pegawai.detail_jabatan_id', 'left');
        $this->db->join('new_simpeg.unor', 'unor.id = detail_jabatan.unor_id', 'left');
        $this->db->join('new_simpeg.jabatan', 'jabatan.id = detail_jabatan.jabatan_id', 'left');
        $this->db->order_by('nama_pegawai', 'ASC');
        $this->db->order_by('detail_jabatan.unor_id', 'ASC');
        if ($id != null) {
            $this->db->where('pegawai.id', $id);
        }
        $this->db->where('nama_pegawai !=', '-');
        $this->db->where('pegawai.status', '1');
        // $this->db->where('nip !=', 'null');
        $query = $this->db->get();
        return $query;
    }

    public function getByOpd($unor, $id = null)
    {
        $this->db->select('*, pegawai.status as stat_peg');
        $this->db->from('new_simpeg.pegawai');
        $this->db->join('new_simpeg.detail_jabatan', 'detail_jabatan.id = pegawai.detail_jabatan_id', 'left');
        $this->db->join('new_simpeg.unor', 'unor.id = detail_jabatan.unor_id', 'left');
        $this->db->join('new_simpeg.jabatan', 'jabatan.id = detail_jabatan.jabatan_id', 'left');
        $this->db->order_by('nama_pegawai', 'ASC');
        $this->db->order_by('detail_jabatan.unor_id', 'ASC');
        if ($id != null) {
            $this->db->where('nama_pegawai', $id);
        }
        if ($unor != null) {
            $this->db->where('detail_jabatan.unor_id', $unor);
        }
        $this->db->where('nama_pegawai !=', '-');
        $this->db->where('pegawai.status', '1');
        // $this->db->where('nip !=', 'null');
        $query = $this->db->get_where();
        return $query;
    }

    public function getProfil()
    {
        $id_peg = 4053;

        $this->db->select('*, kamus_data.kamus_data as agama, kamus_data1.kamus_data as status_pegawai');
        $this->db->from('new_simpeg.pegawai');
        $this->db->join('new_simpeg.kamus_data', 'kamus_data.id = pegawai.agama ', 'LEFT');
        $this->db->join('new_simpeg.kamus_data as kamus_data1', 'kamus_data1.id = pegawai.status_pegawai ', 'LEFT');
        $this->db->join('new_simpeg.detail_jabatan', 'detail_jabatan.id = pegawai.detail_jabatan_id', 'left');
        $this->db->join('new_simpeg.unor', 'unor.id = detail_jabatan.unor_id', 'left');
        $this->db->join('new_simpeg.jabatan', 'jabatan.id = detail_jabatan.jabatan_id', 'left');
        $this->db->join('new_simpeg._eselon', '_eselon.id = jabatan.eselon_id', 'left');
        // $this->db->join('new_simpeg._eselon', '_eselon.id = jabatan.eselon_id', 'left');
        $this->db->where('pegawai.id', $id_peg);
        return $this->db->get_where();
    }

    public function getGolPeg()
    {
        $id_peg = 4053;

        $this->db->select('*');
        $this->db->from('new_simpeg.riwayat_golongan');
        $this->db->join('new_simpeg.golongan', 'golongan.id = riwayat_golongan.golongan_id ', 'LEFT');
        $this->db->join('new_simpeg.pegawai', 'pegawai.id = riwayat_golongan.pegawai_id', 'left');
        $this->db->where('riwayat_golongan.pegawai_id', $id_peg);
        $this->db->where('riwayat_golongan.status', '1');
        return $this->db->get_where();
    }

    public function totPegawai()
    {
        $this->db->select('COUNT(id) as total');
        $this->db->from('new_simpeg.pegawai');
        $this->db->where('status', '1');
        $this->db->where('nama_pegawai !=', '-');
        $query = $this->db->get_where()->row();
        return $query;
    }
}
