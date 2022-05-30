<?php
class TermSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed TermSeeder
     */
    public function run()
    {
        $this->ci->load->model('Term_model');

        $data = array(
            0 => array(
                'id' => '1',
                'title' => 'Primavera 2020-2021',
                'start_date' => '2021-03-01',
                'end_date' => '2021-03-30'
            ),
            1 => array(
                'id' => '2',
                'title' => 'Otoño 2021-2022',
                'start_date' => '2021-11-01',
                'end_date' => '2021-11-30'
            ),
            2 => array(
                'id' => '3',
                'title' => 'Primavera 2021-2022',
                'start_date' => '2022-05-19',
                'end_date' => '2022-06-30'
            )
        );
        $result = $this->ci->Term_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result términos insertados exitosamente" . PHP_EOL;
        }
    }
}
