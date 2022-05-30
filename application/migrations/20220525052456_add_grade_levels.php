<?php
class Migration_Add_grade_levels extends CI_Migration
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
            "title" =>  array(
                "type" => "VARCHAR",
                "constraint" => 255,
            ),
            "title_abbr" =>  array(
                "type" => "VARCHAR",
                "constraint" => 50,
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
        $this->dbforge->create_table("grade_levels");
    }

    public function down()
    {
        $this->dbforge->drop_table("grade_levels");
    }
}
