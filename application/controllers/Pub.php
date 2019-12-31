<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pub extends CI_Controller {

	public function index() {
	    $this->load->view('template/header');
		$this->load->view('public/home_view');
		$this->load->view('template/footer');
	}
	
	public function blog() {
	    $this->load->view('template/header_blog');
	    $this->load->view('public/blog_view');
	    $this->load->view('template/footer');	    
	}
	
	public function events() {
	    $this->load->view('template/header_events');
	    $this->load->view('public/events_view');
	    $this->load->view('template/footer');
	}
}
