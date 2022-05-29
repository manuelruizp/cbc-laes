<?php

class User extends MY_Controller
{
    protected $pagination_limit = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index($start = 0, $search_query = NULL)
    {
        if (!empty($this->input->post('search'))) {
            $search_query = $this->input->post('search');
        }

        $data['users'] = $this->User_model->select_all($this->pagination_limit, $start, $search_query);
        $data['search_query'] = $search_query;

        $config['base_url'] = 'http://localhost:3000/user/index/' . $search_query;
        $config['total_rows'] = $this->User_model->get_count($search_query);
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function view()
    {
    }
}
