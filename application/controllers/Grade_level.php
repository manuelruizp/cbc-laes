<?php

class Grade_level extends MY_Controller
{

    protected $pagination_limit = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Grade_level_model');
    }

    public function index($start = 0, $reset = NULL)
    {
        if ($reset) {
            $this->session->unset_userdata('search_grade_level');
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search_grade_level = $this->input->post('search_grade_level');
            $this->session->set_userdata('search_grade_level', $search_grade_level);
            $data['grade_levels'] = $this->Grade_level_model->select_all($this->pagination_limit, $start, $search_grade_level);
            $data['search_grade_level'] = $search_grade_level;
            $config['total_rows'] = $this->Grade_level_model->get_count($search_grade_level);
        } else  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->session->userdata('search_grade_level')) {
                $search_grade_level = $this->session->userdata('search_grade_level');
                $data['grade_levels'] = $this->Grade_level_model->select_all($this->pagination_limit, $start, $search_grade_level);
                $data['search_grade_level'] = $search_grade_level;
                $config['base_url'] = 'http://localhost:3000/grade_level/index/' . $start;
                $config['total_rows'] = $this->Grade_level_model->get_count($search_grade_level);
            } else {
                $data['grade_levels'] = $this->Grade_level_model->select_all($this->pagination_limit, $start);
                $data['search_grade_level'] = '';
                $config['base_url'] = 'http://localhost:3000/grade_level/index/' . $start;
                $config['total_rows'] = $this->Grade_level_model->get_count();
            }
        }

        $config['base_url'] = 'http://localhost:3000/grade_level/index';
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('grade_level/index', $data);
        $this->load->view('templates/footer');
    }
}
