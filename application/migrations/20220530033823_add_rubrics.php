<?php
class Migration_Add_rubrics extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            "id" => array(
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => TRUE,
                "auto_increment" => TRUE
            ),
            'title' => array(
                'type' => 'TEXT',
            ),
            'non_compliance' => array(
                'type' => 'TEXT',
            ),
            'partial_compliance' => array(
                'type' => 'TEXT',
            ),
            'compliance' => array(
                'type' => 'TEXT',
            ),
            'exceeds_compliance' => array(
                'type' => 'TEXT',
            ),
            'type' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            "created_by_id" =>  array(
                "type" => "INT",
                "constraint" => 5,
                "null" => true,
            ),
            "created_at" =>  array(
                "type" => "DATETIME",
                "null" => true,
            ),
            "updated_by_id" =>  array(
                "type" => "INT",
                "constraint" => 5,
                "null" => true,
            ),
            "updated_at" =>  array(
                "type" => "DATETIME",
                "null" => true,
            ),
        ));
        $this->dbforge->add_key("id", TRUE);
        $this->dbforge->create_table("rubrics");
    }

    public function down()
    {
        $this->dbforge->drop_table("rubrics");
    }
}
