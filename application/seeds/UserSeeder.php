<?php
class UserSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed UserSeeder
     */
    public function run()
    {
        $this->ci->load->model('User_model');

        $data = array(
            0 => array(
                'id' => '1',
                'first_name' => 'Manuel',
                'middle_name' => '',
                'last_name' => 'Ruiz',
                'email' => 'm.ruiz@cbc.edu.do',
                'username' => 'm.ruiz',
                'role' => 'Administrator',
                'password_hash' => '$2y$10$xiIRxcjBaQD2DsYrDKn0suQCVxPrvDmSxZZspjGOiC35nnDaw2jOa'
            ),
            1 => array(
                'id' => '2',
                'first_name' => 'Haduei',
                'middle_name' => '',
                'last_name' => 'Medrano',
                'email' => 'h.medrano@cbc.edu.do',
                'username' => 'h.medrano',
                'role' => 'Supervisor',
                'password_hash' => '$2y$10$xiIRxcjBaQD2DsYrDKn0suQCVxPrvDmSxZZspjGOiC35nnDaw2jOa'
            ),
        );
        $result = $this->ci->User_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
