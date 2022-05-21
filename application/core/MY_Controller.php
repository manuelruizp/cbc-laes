<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Load helpers and libraries
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('cookie');

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('table');

        $this->form_validation->set_error_delimiters('', '');

    }
}
