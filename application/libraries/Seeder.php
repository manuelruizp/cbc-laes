<?php

/**
 * Provides a base class for your own Seeder libraries,
 * to populate the database with data.
 */
class Seeder
{
    protected $ci;
    protected $db;
    protected $dbforge;

    public function __construct()
    {
        $this->ci = &get_instance();

        // Ensure our database is loaded and ready
        $this->ci->load->database();
        $this->ci->load->dbforge();

        // Setup some convenience variables
        $this->db = &$this->ci->db;
        $this->dbforge = &$this->ci->dbforge;
       
    }

    /**
     * Runs the database seeds. This is where the magic happens.
     * This method MUST be overridden by the child classes.
     */
    public function run()
    {
    }

    public function call($class)
    {
        if (empty($class)) {
            show_error('No Seeder was specified.');
        }

        $path = APPPATH . 'seeds/' . str_ireplace('.php', '', $class) . '.php';

        if (!is_file($path)) {
            show_error("Unable to find the Seed class: {$class}");
        }
        try {
            require $path;
            $seeder = new $class();
            $seeder->run();
            unset($seeder);
        } catch (\Exception $e) {
            show_error($e->getMessage(), $e->getCode());
        }

        return TRUE;
    }
}
