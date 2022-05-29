<?php

class Student extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['title'] = 'Gestión de Estudiantes';
        $data['students'] = $this->Student_model->select_all();

        $this->load->view('templates/header', $data);
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
