<?php
class StudentSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed StudentSeeder
     */
    public function run()
    {
        $this->ci->load->model('Student_model');

        $data = array(
            0 => array(
                'id' => '1',
                'first_name' => 'Emmanuel',
                'middle_name' => 'Omar',
                'paternal_last_name' => 'Abreu',
                'maternal_last_name' => 'Pieter',
                'full_name' => 'Abreu Pieter, Emmanuel Omar',
                'grade_level' => '6AP',
                'sex' => 'M',
            ),
            1 => array(
                'id' => '2',
                'first_name' => 'Josué',
                'middle_name' => 'Omar',
                'paternal_last_name' => 'Abreu',
                'maternal_last_name' => 'Pieter',
                'full_name' => 'Abreu Pieter, Josué Omar',
                'grade_level' => '2AP',
                'sex' => 'M',
            ),
            2 => array(
                'id' => '3',
                'first_name' => 'Carlos',
                'middle_name' => 'Famel',
                'paternal_last_name' => 'Abreu',
                'maternal_last_name' => 'Vassallo',
                'full_name' => 'Abreu Vassallo, Carlos Famel',
                'grade_level' => '5BS',
                'sex' => 'M',
            )
        );
        $result = $this->ci->Student_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
