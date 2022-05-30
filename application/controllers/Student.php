<?php

class Student extends MY_Controller
{

    protected $pagination_limit = 10;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index($start = 0, $reset = NULL)
    {
        if ($reset) {
            $this->session->unset_userdata('search_student');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search_student = $this->input->post('search_student');
            $this->session->set_userdata('search_student', $search_student);
            $data['students'] = $this->Student_model->select_all($this->pagination_limit, $start, $search_student);
            $data['search_student'] = $search_student;
            $config['total_rows'] = $this->Student_model->get_count($search_student);

        } else  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->session->userdata('search_student')) {
                $search_student = $this->session->userdata('search_student');
                $data['students'] = $this->Student_model->select_all($this->pagination_limit, $start, $search_student);
                $data['search_student'] = $search_student;
                $config['base_url'] = 'http://localhost:3000/student/index/' . $start;
                $config['total_rows'] = $this->Student_model->get_count($search_student);
            } else {
                $data['students'] = $this->Student_model->select_all($this->pagination_limit, $start);
                $data['search_student'] = '';
                $config['base_url'] = 'http://localhost:3000/student/index/' . $start;
                $config['total_rows'] = $this->Student_model->get_count();
            }
        }

        $config['base_url'] = 'http://localhost:3000/student/index';
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('first_name', 'Primer nombre', 'required');
        $this->form_validation->set_rules('paternal_last_name', 'Primer apellido', 'required');
        $this->form_validation->set_rules('sex', 'Sexo del estudiante', 'required');
        $this->form_validation->set_rules('birthdate', 'Fecha de nacimiento', 'required');
        $this->form_validation->set_rules('student_id', 'Fecha de nacimiento', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Crear nuevo estudiante';

            $this->load->view('templates/header', $data);
            $this->load->view('student/create');
            $this->load->view('templates/footer');
        } else {
            $insert_id = $this->Student_model->insert_student();
            if ($insert_id) {
                $this->session->set_flashdata('success', 'The estudiante fue creado exitosamente.');
                redirect('student');
            } else {
                $this->session->set_flashdata('error', 'The estudiante no pudo ser creado. Por favor comuníquese con el administrador.');
                redirect('student');
            }
        }
    }
}
