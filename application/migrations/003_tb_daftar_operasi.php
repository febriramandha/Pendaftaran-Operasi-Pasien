<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Tb_daftar_operasi extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'tgl_operasi' => array(
                'type' => 'DATE',
                'default' => null,
            ),
            'nama_pasien' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'no_mr' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => null,
            ),
            'tgl_lahir' => array(
                'type' => 'DATE',
                'default' => null,
            ),
            'jekel' => array(
                'type' => 'DATE',
                'default' => null,
            ),
            'nama_ruangan' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'diagnosa' => array(
                'type' => 'TEXT',
                'default' => null,
            ),
            'rencana_tindakan' => array(
                'type' => 'TEXT',
                'default' => null,
            ),
            'nama_dpjp' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'jenis_anastesi' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'jenis_pembayaran' => array(
                'type' => 'INT',
                'constraint' => '1',
                'default' => null,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'default' => null,
            ),
            'created_by' => array(
                'type' => 'INT4',
                'constraint' => '32',
                'default' => null,
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'default' => null,
            ),
            'updated_by' => array(
                'type' => 'INT4',
                'constraint' => '32',
                'default' => null,
            ),
            'status' => array(
                'type' => 'INT4',
                'default' => '1',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('daftar_operasi');
    }

    public function down()
    {
        $this->dbforge->drop_table('daftar_operasi');
    }
}
