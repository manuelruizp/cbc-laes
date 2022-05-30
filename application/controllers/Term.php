<?php

class Term extends MY_Controller
{

    protected $pagination_limit = 10;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Term_model');
    }

    public function index($start = 0, $reset = NULL)
    {
        if ($reset) {
            $this->session->unset_userdata('search_term');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search_term = $this->input->post('search_term');
            $this->session->set_userdata('search_term', $search_term);
            $data['terms'] = $this->Term_model->select_all($this->pagination_limit, $start, $search_term);
            $data['search_term'] = $search_term;
            $config['total_rows'] = $this->Term_model->get_count($search_term);
        } else  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->session->userdata('search_term')) {
                $search_term = $this->session->userdata('search_term');
                $data['terms'] = $this->Term_model->select_all($this->pagination_limit, $start, $search_term);
                $data['search_term'] = $search_term;
                $config['base_url'] = 'http://localhost:3000/term/index/' . $start;
                $config['total_rows'] = $this->Term_model->get_count($search_term);
            } else {
                $data['terms'] = $this->Term_model->select_all($this->pagination_limit, $start);
                $data['search_term'] = '';
                $config['base_url'] = 'http://localhost:3000/term/index/' . $start;
                $config['total_rows'] = $this->Term_model->get_count();
            }
        }

        $config['base_url'] = 'http://localhost:3000/term/index';
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('term/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('start_date', 'Fecha de inicio', 'required');
        $this->form_validation->set_rules('end_date', 'Fecha de finalización', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('term/create');
            $this->load->view('templates/footer');
        } else {
            $insert_id = $this->Term_model->insert_one_from_form();
            if ($insert_id) {
                $this->session->set_flashdata('success', 'The registro fue creado exitosamente.');
                redirect('term');
            } else {
                $this->session->set_flashdata('error', 'The registro no pudo ser creado. Por favor comuníquese con el administrador.');
                redirect('term');
            }
        }
    }
}
