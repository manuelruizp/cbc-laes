<?php

class User extends MY_Controller
{
    protected $pagination_limit = 10;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Grade_level_model');
        $this->load->model('User_grade_level_model');
        $this->load->model('Term_model');
        $this->load->model('Rubric_model');
        $this->load->model('User_grade_level_detail_model');
    }

    public function index($start = 0, $reset = NULL)
    {
        if ($reset) {
            $this->session->unset_userdata('search_user');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search_user = $this->input->post('search_user');
            $this->session->set_userdata('search_user', $search_user);
            $data['users'] = $this->User_model->select_all($this->pagination_limit, $start, $search_user);
            $data['search_user'] = $search_user;
            $config['total_rows'] = $this->User_model->get_count($search_user);
        } else  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->session->userdata('search_user')) {
                $search_user = $this->session->userdata('search_user');
                $data['users'] = $this->User_model->select_all($this->pagination_limit, $start, $search_user);
                $data['search_user'] = $search_user;
                $config['base_url'] = 'http://localhost:3000/user/index/' . $start;
                $config['total_rows'] = $this->User_model->get_count($search_user);
            } else {
                $data['users'] = $this->User_model->select_all($this->pagination_limit, $start);
                $data['search_user'] = '';
                $config['base_url'] = 'http://localhost:3000/user/index/' . $start;
                $config['total_rows'] = $this->User_model->get_count();
            }
        }

        $config['base_url'] = 'http://localhost:3000/user/index';
        $config['per_page'] = $this->pagination_limit;
        $this->pagination->initialize($config);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/flash_messages');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('first_name', 'Primer nombre', 'required');
        $this->form_validation->set_rules('last_name', 'Apellidos', 'required');
        $this->form_validation->set_rules('email', 'Correo electrónico', 'required');
        $this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
        $this->form_validation->set_rules('password', 'Contraseña de usuario', 'required');
        $this->form_validation->set_rules('password2', 'Repetir contraseña de usuario', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('user/create');
            $this->load->view('templates/footer');
        } else {
            $insert_id = $this->User_model->insert_one_using_form();
            if ($insert_id) {
                $this->session->set_flashdata('success', 'El registro fue creado exitosamente.');
                redirect('user');
            } else {
                $this->session->set_flashdata('error', 'El registro no pudo ser creado. Por favor comuníquese con el administrador.');
                redirect('user');
            }
        }
    }

    public function edit($id = NULL)
    {

        if (!$id) {
            return show_404();
        }

        $this->form_validation->set_rules('first_name', 'Primer nombre', 'required');
        $this->form_validation->set_rules('last_name', 'Apellidos', 'required');
        $this->form_validation->set_rules('email', 'Correo electrónico del estudiante', 'required');
        $this->form_validation->set_rules('username', 'Nombre de usuario', 'required');

        if ($this->form_validation->run() === FALSE) {
            if (!$data['user'] = $this->User_model->select_one_by_primary_key($id)) {
                show_404();
            }

            $data['terms'] = $this->Term_model->select_field_for_dropdown('title', 'Seleccione periodo de evaluación');
            $data['grade_levels'] = $this->Grade_level_model->select_field_for_dropdown('title', 'Seleccione curso');
            $data['user_grade_levels'] = $this->User_grade_level_model->select_user_grade_levels_extended($id);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $updated_id = $this->User_model->update_one_from_form($id);

            if ($updated_id) {
                $this->session->set_flashdata('success', 'El registro fue actualizado exitosamente.');
                redirect('user');
            } else {
                $this->session->set_flashdata('error', 'El registro no pudo ser actualizado. Por favor comuníquese con el administrador.');
                redirect('user');
            }
        }
    }

    public function assign($id)
    {

        $this->form_validation->set_rules('grade_level_id', 'Curso', 'required');
        $this->form_validation->set_rules('term_id', 'Periodo de evaluación', 'required');
        $this->form_validation->set_rules('rubrics[]', 'Correo electrónico del estudiante', 'required');

        if ($this->form_validation->run() === FALSE) {
            if (!$data['user'] = $this->User_model->select_one_by_primary_key($id)) {
                show_404();
            }

            $data['terms'] = $this->Term_model->select_field_for_dropdown('title', '', ['start_date', 'DESC']);
            $data['grade_levels'] = $this->Grade_level_model->select_field_for_dropdown('title');
            $data['rubrics'] = $this->Rubric_model->select_all(34);

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('user/assign', $data);
            $this->load->view('templates/footer');
        } else {
            $insert_id = $this->User_grade_level_model->insert_one_using_form();

            if ($insert_id) {
                $rubrics = $this->input->post('rubrics');
            
                $data = array();
                foreach($rubrics as $rubric) {
                    $row = array('user_grade_level_id' => $insert_id, 'rubric_id' => $rubric);
                    array_push($data, $row);
                }  
                $this->User_grade_level_detail_model->insert_many($data);

                $this->session->set_flashdata('success', 'El registro fue creado exitosamente.');
                redirect('user');
            } else {
                $this->session->set_flashdata('error', 'El registro no pudo ser creado. Por favor comuníquese con el administrador.');
                redirect('user');
            }
        }
    }

    public function unassign($id) {
        if ($this->input->is_ajax_request()) {
            echo $id;
        } else {
            echo "NOT AJAX";
            $ajax = $this->input->is_ajax_request();
            var_dump($ajax);
        }

    }
}
