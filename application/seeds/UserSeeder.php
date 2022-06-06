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
            1 => array(
                'first_name' => 'Josefina',
                'middle_name' => '',
                'last_name' => 'Aguero',
                'email' => 'j.aguero@cbc.edu.do',
                'username' => 'j.aguero',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            2 => array(
                'first_name' => 'Axel',
                'middle_name' => '',
                'last_name' => 'Auguiste',
                'email' => 'a.auguiste@cbc.edu.do',
                'username' => 'a.auguiste',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            3 => array(
                'first_name' => 'Rosange',
                'middle_name' => '',
                'last_name' => 'Cabreja',
                'email' => 'r.cabreja@cbc.edu.do',
                'username' => 'r.cabreja',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            4 => array(
                'first_name' => 'Thomas',
                'middle_name' => '',
                'last_name' => 'Cámpiz',
                'email' => 't.campiz@cbc.edu.do',
                'username' => 't.campiz',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            5 => array(
                'first_name' => 'Karoll',
                'middle_name' => '',
                'last_name' => 'Contreras',
                'email' => 'k.contreras@cbc.edu.do',
                'username' => 'k.contreras',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            6 => array(
                'first_name' => 'Iván',
                'middle_name' => '',
                'last_name' => 'Correa',
                'email' => 'i.correa@cbc.edu.do',
                'username' => 'i.correa',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            7 => array(
                'first_name' => 'Isidro',
                'middle_name' => '',
                'last_name' => 'Cuevas',
                'email' => 'i.cuevas@cbc.edu.do',
                'username' => 'i.cuevas',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            8 => array(
                'first_name' => 'Miguel',
                'middle_name' => '',
                'last_name' => 'de Jesús',
                'email' => 'm.dejesus@cbc.edu.do',
                'username' => 'm.dejesus',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            9 => array(
                'first_name' => 'Crismar',
                'middle_name' => '',
                'last_name' => 'Díaz',
                'email' => 'c.diaz@cbc.edu.do',
                'username' => 'c.diaz',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            10 => array(
                'first_name' => 'Melina',
                'middle_name' => '',
                'last_name' => 'Duran',
                'email' => 'm.duran@cbc.edu.do',
                'username' => 'm.duran',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            11 => array(
                'first_name' => 'Lynn',
                'middle_name' => '',
                'last_name' => 'Félix',
                'email' => 'l.felix@cbc.edu.do',
                'username' => 'l.felix',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            12 => array(
                'first_name' => 'Gloris',
                'middle_name' => '',
                'last_name' => 'Feliz',
                'email' => 'g.feliz@cbc.edu.do',
                'username' => 'g.feliz',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            13 => array(
                'first_name' => 'Margarita',
                'middle_name' => '',
                'last_name' => 'Florián',
                'email' => 'm.florian@cbc.edu.do',
                'username' => 'm.florian',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            14 => array(
                'first_name' => 'Nicauris',
                'middle_name' => '',
                'last_name' => 'Francisco',
                'email' => 'n.francisco@cbc.edu.do',
                'username' => 'n.francisco',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            15 => array(
                'first_name' => 'Dorca',
                'middle_name' => '',
                'last_name' => 'Guerrero',
                'email' => 'd.guerrero@cbc.edu.do',
                'username' => 'd.guerrero',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            16 => array(
                'first_name' => 'Regina',
                'middle_name' => '',
                'last_name' => 'Guzmán',
                'email' => 'r.guzman@cbc.edu.do',
                'username' => 'r.guzman',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            17 => array(
                'first_name' => 'Miguel',
                'middle_name' => '',
                'last_name' => 'Ledesma',
                'email' => 'm.ledesma@cbc.edu.do',
                'username' => 'm.ledesma',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            18 => array(
                'first_name' => 'Larissa',
                'middle_name' => '',
                'last_name' => 'Lluberes',
                'email' => 'l.lluberes@cbc.edu.do',
                'username' => 'l.lluberes',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            19 => array(
                'first_name' => 'Robert',
                'middle_name' => '',
                'last_name' => 'Lorenzo',
                'email' => 'r.lorenzo@cbc.edu.do',
                'username' => 'r.lorenzo',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            20 => array(
                'first_name' => 'Jatnna',
                'middle_name' => '',
                'last_name' => 'Marmolejos',
                'email' => 'j.marmolejos@cbc.edu.do',
                'username' => 'j.marmolejos',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            21 => array(
                'first_name' => 'Maridalia',
                'middle_name' => '',
                'last_name' => 'Martinez',
                'email' => 'm.martinez@cbc.edu.do',
                'username' => 'm.martinez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            22 => array(
                'first_name' => 'Carminela',
                'middle_name' => '',
                'last_name' => 'Meregildo',
                'email' => 'c.meregildo@cbc.edu.do',
                'username' => 'c.meregildo',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            23 => array(
                'first_name' => 'Aybelis',
                'middle_name' => '',
                'last_name' => 'Montaño',
                'email' => 'a.montano@cbc.edu.do',
                'username' => 'a.montano',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            24 => array(
                'first_name' => 'Orquidea',
                'middle_name' => '',
                'last_name' => 'Montero',
                'email' => 'o.montero@cbc.edu.do',
                'username' => 'o.montero',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            25 => array(
                'first_name' => 'Priscila',
                'middle_name' => '',
                'last_name' => 'Montero',
                'email' => 'p.montero@cbc.edu.do',
                'username' => 'p.montero',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            26 => array(
                'first_name' => 'Diana',
                'middle_name' => '',
                'last_name' => 'Mora',
                'email' => 'd.mora@cbc.edu.do',
                'username' => 'd.mora',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            27 => array(
                'first_name' => 'Alina',
                'middle_name' => '',
                'last_name' => 'Nouel',
                'email' => 'a.nouel@cbc.edu.do',
                'username' => 'a.nouel',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            28 => array(
                'first_name' => 'Josmi',
                'middle_name' => '',
                'last_name' => 'Ovalles',
                'email' => 'j.ovalles@cbc.edu.do',
                'username' => 'j.ovalles',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            29 => array(
                'first_name' => 'Maricel',
                'middle_name' => '',
                'last_name' => 'Paez',
                'email' => 'm.paez@cbc.edu.do',
                'username' => 'm.paez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            30 => array(
                'first_name' => 'Elizabeth',
                'middle_name' => '',
                'last_name' => 'Peña',
                'email' => 'e.pena@cbc.edu.do',
                'username' => 'e.pena',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            31 => array(
                'first_name' => 'Santiago',
                'middle_name' => '',
                'last_name' => 'Peralta',
                'email' => 's.peralta@cbc.edu.do',
                'username' => 's.peralta',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            32 => array(
                'first_name' => 'Delnalisa',
                'middle_name' => '',
                'last_name' => 'Pinales',
                'email' => 'd.pinales@cbc.edu.do',
                'username' => 'd.pinales',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            33 => array(
                'first_name' => 'Milca',
                'middle_name' => '',
                'last_name' => 'Puello',
                'email' => 'm.puello@cbc.edu.do',
                'username' => 'm.puello',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            34 => array(
                'first_name' => 'Katherine',
                'middle_name' => '',
                'last_name' => 'Ramirez',
                'email' => 'k.ramirez@cbc.edu.do',
                'username' => 'k.ramirez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            35 => array(
                'first_name' => 'Gabriela',
                'middle_name' => '',
                'last_name' => 'Reyes',
                'email' => 'g.reyes@cbc.edu.do',
                'username' => 'g.reyes',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            36 => array(
                'first_name' => 'Carmen',
                'middle_name' => '',
                'last_name' => 'Rijo',
                'email' => 'c.rijo@cbc.edu.do',
                'username' => 'c.rijo',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            37 => array(
                'first_name' => 'Gibel',
                'middle_name' => '',
                'last_name' => 'Rojas',
                'email' => 'g.rojas@cbc.edu.do',
                'username' => 'g.rojas',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            38 => array(
                'first_name' => 'Abraham',
                'middle_name' => '',
                'last_name' => 'Sanchez',
                'email' => 'ab.sanchez@cbc.edu.do',
                'username' => 'ab.sanchez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            39 => array(
                'first_name' => 'Ayetska',
                'middle_name' => '',
                'last_name' => 'Sanchez',
                'email' => 'a.sanchez@cbc.edu.do',
                'username' => 'a.sanchez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            40 => array(
                'first_name' => 'Ludys',
                'middle_name' => '',
                'last_name' => 'Tejada',
                'email' => 'l.tejada@cbc.edu.do',
                'username' => 'l.tejada',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            41 => array(
                'first_name' => 'Scarlet',
                'middle_name' => '',
                'last_name' => 'Volquez',
                'email' => 's.volquez@cbc.edu.do',
                'username' => 's.volquez',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
            42 => array(
                'first_name' => 'Bruliasse',
                'middle_name' => '',
                'last_name' => 'Xavier',
                'email' => 'b.xavier@cbc.edu.do',
                'username' => 'b.xavier',
                'password' => '$2y$10$nk1Y9A.Z23hDHjls38I/DuZiNkaEFSFx9pjUmkvOYlkfM37Vcg48G',
                'role' => 'Teacher'
            ),
        );;
        $result = $this->ci->User_model->insert_many($data, $truncate = TRUE);

        if ($result) {
            echo "$result registros insertados exitosamente" . PHP_EOL;
        }
    }
}
