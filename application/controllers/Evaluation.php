<?php

class Evaluation extends MY_Controller
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

    public function grade_level($grade_level_id)
    {
        $student_grade_levels = $this->Student_grade_level_model->select_students_by_term_and_grade_level($this->user_term_id, $grade_level_id);
        $data['students'] = $student_grade_levels;
        $data['grade_level_title'] = $student_grade_levels[0]['title'];

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('evaluation/grade_level', $data);
        $this->load->view('templates/footer');
    }

    public function student($student_id)
    {
        
    }
}
