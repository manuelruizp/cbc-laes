<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Term_model');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		$this->form_validation->set_rules('term_id', 'Término', 'required');

		$data['terms'] = $this->Term_model->select_field_for_dropdown('title', '', ['start_date', 'DESC']);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('auth/login', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$term_id = $this->input->post('term_id');

			$user = $this->User_model->select_one_by_field('username', $username);

			if ($user === NULL) {
				$this->session->set_flashdata('errors', 'Este nombre de usuario no existe.');
				redirect('/auth/login');
			} else if (password_verify($password, $user['password']) === FALSE) {
				$this->session->set_flashdata('errors', 'El nombre de usuario y la contraseña no concuerdan.');
				redirect('/auth/login');
			} else if (password_verify($password, $user['password']) === TRUE) {
				$userdata = array(
					'user_id'  => $user['id'],
					'user_full_name'  => $user['first_name'] . " " . $user['last_name'],
					'user_email'     => $user['email'],
					'user_role' => $user['role'],
					'user_term_id' => $term_id,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($userdata);
				redirect('/home');
			}
		}
	}

	public function logout() {
		session_destroy();
		redirect('auth/login');
	}
}
