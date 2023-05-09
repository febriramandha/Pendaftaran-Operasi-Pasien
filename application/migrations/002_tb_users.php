<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Tb_users extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'default' => null,
            ),
            'password' => array(
                'type' => 'TEXT',
                'default' => null,
            ),
            'full_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'default' => null,
            ),
            'level' => array(
                'type' => 'INT',
                'default' => null,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '6',
                'default' => null,
            ),
            'created_by' => array(
                'type' => 'INT4',
                'constraint' => '32',
                'default' => null,
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '6',
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
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
