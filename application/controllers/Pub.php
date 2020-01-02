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
	
	public function destinations() {
	    $this->load->view('template/header_destinations');
	    $this->load->view('public/destinations_view');
	    $this->load->view('template/footer');
	}
	
	public function garage() {
	    $this->load->view('template/header_garage');
	    $this->load->view('public/garage_view');
	    $this->load->view('template/footer');
	}
	
	public function club() {
	    $this->load->view('template/header_gen');
	    $this->load->view('public/club_view');
	    $this->load->view('template/footer');
	}
	
	public function contact() {
	    $this->load->view('template/header_gen');
	    $this->load->view('public/contact_view');
	    $this->load->view('template/footer');
	}
	
	public function team() {
	    $this->load->view('template/header_gen');
	    $this->load->view('public/team_view');
	    $this->load->view('template/footer');
	}
}
