<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_Child_Tbl_acl extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_column('new_acl', array(
            'child' => array(
                'type' => 'INT4',
                'default' => null,
            ),
        ));
    }

    public function down()
    {
        $this->dbforge->drop_column('new_acl', 'child');
    }
}
