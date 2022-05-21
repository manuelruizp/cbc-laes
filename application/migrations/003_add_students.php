<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_students extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'middle_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'paternal_last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'maternal_last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '60',
            ),
            'sex' => array(
                'type' => 'VARCHAR',
                'constraint' => '5',
            ),
            'grade_level' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
            'is_active' => array(
                'type' => 'TINYINT',
                'default' => '1'
            ),
            'created_at' =>  array(
                'type' => 'DATETIME',
                'null' => true,
            ),
            'updated_at' =>  array(
                'type' => 'DATETIME',
                'null' => true,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('students');
    }

    public function down()
    {
        $this->dbforge->drop_table('students');
    }
}
