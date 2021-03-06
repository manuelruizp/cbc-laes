<?php

/** 
 * Make
 * Controllador para generar nuevas clases en la linea de comando.
 * 
 * Cómo utilizar (ejemplo):
 * php index.php Maker [Controller/Model] [nombre de la clase]
 * */

class Make extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper('inflector');
    }

    public function model($name = null)
    {
        if (!$name) {
            die("Debe digitar un nombre para el nuevo modelo");
        }

        if (strpos($name, '_model') !== FALSE) {
            $name = str_replace("_model", "", $name);
        }

        $filename = ucfirst(singular($name)) . "_model.php";
        $classname = ucfirst(singular($name)) . "_model";
        $table_name = plural(lcfirst($name));

        if (file_exists(APPPATH . "controllers/$filename")) {
            die('¡Disculpe! No podemos reemplazar un archivo. Revise y elimine manualmente primero.');
        }

        $file_content = '<?php 
        
        class ' . $classname . ' extends MY_Model { 
            protected $table = "' . $table_name . '"; 
            public function __construct() { 
                parent::__construct(); 
            } 
        }';

        // Intentamos escribir el archivo
        if (!write_file(APPPATH . "/models/$filename", $file_content)) {
            echo '¡Disculpe! No pudimos generar el nuevo modelo CI';
        } else {
            echo 'Modelo CI nuevo generado. ¡Excelente!';
        }
    }

    public function controller($name = null)
    {
        if (!$name) {
            die("Debe digitar un nombre para el nuevo controlador");
        }

        $classname = ucfirst(singular($name));
        $filename = $classname . ".php";

        if (file_exists(APPPATH . "controllers/$filename")) {
            die('¡Disculpe! No podemos reemplazar un archivo. Revise y elimine manualmente primero.');
        }

        $file_content = '<?php
        
        class ' . $classname . ' extends MY_Controller { 
            public function __construct() { 
                parent::__construct(); 
                } 
            }';

        // Intentamos escribir el archivo
        if (!write_file(APPPATH . "/controllers/$filename", $file_content)) {
            echo '¡Disculpe! No pudimos generar el nuevo controlador CI';
        } else {
            echo 'controlador CI nuevo generado. ¡Excelente!';
        }
    }

    public function migration($name = null)
    {
        if (!$name) {
            die("Debe digitar un nombre para la nueva migración");
        }

        // Migration_Add_students

        $classname = "Migration_Add_" . plural(lcfirst($name));
        $filename = date('Ymdhis') . "_add_" . plural(lcfirst($name)) . ".php";

        if (file_exists(APPPATH . "migrations/$filename")) {
            die('¡Disculpe! No podemos reemplazar un archivo. Revise y elimine manualmente primero.');
        }

        $file_content = '<?php
        class ' . $classname . ' extends CI_Migration { 
            
    public function up()
    {
        $this->dbforge->add_field(array(
            "id" => array(
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => TRUE,
                "auto_increment" => TRUE
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
        $this->dbforge->create_table("' . plural(lcfirst($name)) . '");
    }

    public function down()
    {
        $this->dbforge->drop_table("' . plural(lcfirst($name)) . '");
    }
}';

        // Intentamos escribir el archivo
        if (!write_file(APPPATH . "/migrations/$filename", $file_content)) {
            echo '¡Disculpe! No pudimos generar la nueva migración CI';
        } else {
            echo 'Migración CI nuevo generada. ¡Excelente!';
        }
    }
}
