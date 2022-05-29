<?php

class Term extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Term_model');
    }

    public function index()
    {
    }

    public function create()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('start_date', 'Fecha de inicio', 'required');
        $this->form_validation->set_rules('end_date', 'Fecha de finalización', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/topnav');
            $this->load->view('term/create');
            $this->load->view('templates/footer');
        } else {
            $formData = [
                'title' => $this->input->post('title'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'),
            ];

            $this->Term_model->insert_one($formData);

            echo "GOOD!";
        }
    }
}
