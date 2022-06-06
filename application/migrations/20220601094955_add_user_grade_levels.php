<?php

class Migration_Add_user_grade_levels extends CI_Migration
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
            "term_id" => array(
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => TRUE,
            ),
            "grade_level_id" => array(
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => TRUE,
            ),
            "user_id" => array(
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => TRUE,
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
        $this->dbforge->create_table("user_grade_levels");
    }

    public function down()
    {
        $this->dbforge->drop_table("user_grade_levels");
    }
}
