<?php
class GradeLevelSeeder extends Seeder
{
    /**
     * Run on the command line:
     * php index.php database seed GradeLevelSeeder
     */
    public function run()
    {
        $this->ci->load->model('Grade_level_model');

        $data = array(
            0 => array('id' => '1', 'title' => 'Maternal', 'title_abbr' => 'MAT'),
            1 => array('id' => '2', 'title' => 'Kinder', 'title_abbr' => 'KIN'),
            2 => array('id' => '3', 'title' => 'Pre-Primario A', 'title_abbr' => 'PPA'),
            3 => array('id' => '4', 'title' => 'Pre-Primario B', 'title_abbr' => 'PPB'),
            4 => array('id' => '5', 'title' => '1ro Primaria A', 'title_abbr' => '1AP'),
            5 => array('id' => '6', 'title' => '1ro Primaria B', 'title_abbr' => '1BP'),
            6 => array('id' => '7', 'title' => '2do Primaria A', 'title_abbr' => '2AP'),
            7 => array('id' => '8', 'title' => '2do Primaria B', 'title_abbr' => '2BP'),
            8 => array('id' => '9', 'title' => '3ro Primaria A', 'title_abbr' => '3AP'),
            9 => array('id' => '10', 'title' => '3ro Primaria B', 'title_abbr' => '3BP'),
            10 => array('id' => '11', 'title' => '4to Primaria A', 'title_abbr' => '4AP'),
            11 => array('id' => '12', 'title' => '4to Primaria B', 'title_abbr' => '4BP'),
            12 => array('id' => '13', 'title' => '5to Primaria A', 'title_abbr' => '5AP'),
            13 => array('id' => '14', 'title' => '5to Primaria B', 'title_abbr' => '5BP'),
            14 => array('id' => '15', 'title' => '6to Primaria A', 'title_abbr' => '6AP'),
            15 => array('id' => '16', 'title' => '6to Primaria B', 'title_abbr' => '6BP'),
            16 => array('id' => '17', 'title' => '1ro Secundaria A', 'title_abbr' => '1AS'),
            17 => array('id' => '18', 'title' => '1ro Secundaria B', 'title_abbr' => '1SB'),
            18 => array('id' => '19', 'title' => '2do Secundaria A', 'title_abbr' => '2AS'),
            19 => array('id' => '20', 'title' => '2do Secundaria B', 'title_abbr' => '2BS'),
            20 => array('id' => '21', 'title' => '3ro Secundaria A', 'title_abbr' => '3AS'),
            21 => array('id' => '22', 'title' => '3ro Secundaria B', 'title_abbr' => '3BS'),
            22 => array('id' => '23', 'title' => '4to Secundaria A', 'title_abbr' => '4AS'),
            23 => array('id' => '24', 'title' => '4to Secundaria B', 'title_abbr' => '4BS'),
            24 => array('id' => '25', 'title' => '5to Secundaria A', 'title_abbr' => '5AS'),
            25 => array('id' => '26', 'title' => '5to Secundaria B', 'title_abbr' => '5BS'),
            26 => array('id' => '27', 'title' => '6to Secundaria A', 'title_abbr' => '6AS'),
            27 => array('id' => '28', 'title' => '6to Secundaria B', 'title_abbr' => '6BS'),
        );

        $result = $this->ci->Grade_level_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
