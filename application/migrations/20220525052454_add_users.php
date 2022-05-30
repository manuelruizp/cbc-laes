<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
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
                'constraint' => '50'
            ),
            'middle_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '80'
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '80'
            ),
            'password' => array(
                'type' => 'TEXT'
            ),
            'role' => array(
                'type' => 'ENUM("Administrator", "Supervisor", "Teacher")'
            ),
            'created_by_id' =>  array(
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ),
            'created_at' =>  array(
                'type' => 'DATETIME',
                'null' => true,
            ),
            'updated_by_id' =>  array(
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ),
            'updated_at' =>  array(
                'type' => 'DATETIME',
                'null' => true,
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
