<?php

class Database  extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if (!$this->input->is_cli_request()) {
        //     show_error('Seeding is only available from the command line.');
        // }
    }

    public function seed($seeder)
    {
        $this->load->library('seeder');

        $this->seeder->call($seeder);
    }

    // php index.php database run_migrations [version = null]
    public function migrate($version = NULL)
    {
        $this->load->library('migration');

        if ($version >= 0 && $version != NULL) {
            if ($this->migration->version($version) === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo "Migration completed to version: $version.";
            }
        } else {
            if ($this->migration->current() === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo "Migration completed to the current version.";
            }
        }
    }

    // php index.php database run_seeds
    public function run_seeds()
    {
        $this->load->library('seeder');

        $this->seeder->call('EvaluationSeeder');
        $this->seeder->call('UserSeeder');
        $this->seeder->call('StudentSeeder');
        $this->seeder->call('GroupSeeder');
        $this->seeder->call('UserGroupSeeder');
        $this->seeder->call('StudentGroupSeeder');
        $this->seeder->call('RubricSeeder');
        $this->seeder->call('UserGroupRubricSeeder');
        
        $this->seeder->call('FormSeeder');
        $this->seeder->call('FormDetailSeeder');
    }
}
