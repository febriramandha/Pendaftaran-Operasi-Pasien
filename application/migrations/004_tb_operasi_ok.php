<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Tb_operasi_ok extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'id_daftar_pasien' => array(
                'type' => 'INT',
                'default' => null,
            ),
            'wkt_tunggu' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'jam_sign_in' => array(
                'type' => 'TIME',
                'default' => null,
            ),
            'jam_time_out' => array(
                'type' => 'TIME',
                'default' => null,
            ),
            'jam_sign_out' => array(
                'type' => 'TIME',
                'default' => null,
            ),
            'petugas_ok' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'rencana_rawat' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'implan' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'default' => null,
            ),
            'status_pasien_ok' => array(
                'type' => 'INT',
                'default' => null,
            ),
            'ket' => array(
                'type' => 'TEXT',
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
        $this->dbforge->create_table('operasi_ok');
    }

    public function down()
    {
        $this->dbforge->drop_table('operasi_ok');
    }
}
