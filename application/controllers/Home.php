<?php

class Home extends MY_Controller
{
    protected $user_id;
    protected $user_term_id;
    protected $user_full_name;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_grade_level_model');
        $this->load->model('Student_grade_level_model');

        $this->user_id = $this->session->userdata('user_id');
        $this->user_term_id = $this->session->userdata('user_term_id');
        $this->user_full_name = $this->session->userdata('user_full_name');
    }

    public function index()
    {
        $user_grade_levels = $this->User_grade_level_model->select_user_grade_levels_by_term($this->user_term_id, $this->user_id);

        $data['user_grade_levels'] = $user_grade_levels;
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
