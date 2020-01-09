<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()	{
	    $this->load->view('template/header_master');
	    $this->load->model('login_model');
	    $this->load->view('master/master_view');
	    $this->load->view('template/footer');
	}
}
