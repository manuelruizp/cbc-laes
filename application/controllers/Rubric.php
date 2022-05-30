<?php

class Rubric extends MY_Controller
{
    protected $pagination_limit = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rubric_model');
    }

    public function index($start = 0, $reset = NULL)
    {
        if ($reset) {
            $this->session->unset_userdata('search_rubric');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search_rubric = $this->input->post('search_rubric');
            $this->session->set_userdata('search_rubric', $search_rubric);
            $data['rubrics'] = $this->Rubric_model->select_all($this->pagination_limit, $start, $search_rubric);
            $data['search_rubric'] = $search_rubric;
            $config['total_rows'] = $this->Rubric_model->get_count($search_rubric);

        } else  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->session->userdata('search_rubric')) {
                $search_rubric = $this->session->userdata('search_rubric');
                $data['rubrics'] = $this->Rubric_model->select_all($this->pagination_limit, $start, $search_rubric);
                $data['search_rubric'] = $search_rubric;
                $config['base_url'] = 'http://localhost:3000/rubric/index/' . $start;
                $config['total_rows'] = $this->Rubric_model->get_count($search_rubric);
            } else {
                $data['rubrics'] = $this->Rubric_model->select_all($this->pagination_limit, $start);
                $data['search_rubric'] = '';
                $config['base_url'] = 'http://localhost:3000/rubric/index/' . $start;
                $config['total_rows'] = $this->Rubric_model->get_count();
            }
        }

        $config['base_url'] = 'http://localhost:3000/rubric/index';
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('rubric/index', $data);
        $this->load->view('templates/footer');
    }
}
