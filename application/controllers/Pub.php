<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pub extends CI_Controller {

	public function index() {
		$this->load->view('public/home_view');
	}
}
