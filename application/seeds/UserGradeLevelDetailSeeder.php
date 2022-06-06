<?php
class UserGradeLevelDetailSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed UserGradeLevelDetailSeeder
     */
    public function run()
    {
        $this->ci->load->model('User_grade_level_detail_model');

        $data = array();

        $result = $this->ci->User_grade_level_detail_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
