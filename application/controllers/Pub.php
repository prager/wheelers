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
	
	public function register() {	    
	    $this->load->view('template/header_gen');
	    $data['fname'] = '';
	    $data['lname'] = '';
	    $data['email'] = '';
	    $data['callsign'] = '';
	    $data['phone'] = '';
	    $data['street'] = '';
	    $data['city'] = '';
	    $data['state'] = 'CA';
	    $data['zip'] = '';
	    $data['msg'] = '';
	    $data['twitter'] = '';
	    $data['facebook'] = '';
	    $data['linkedin'] = '';
	    $data['googleplus'] = '';
	    $data['type'] = '7';
	    $this->load->view('public/register_view',$data);
	    $this->load->view('template/footer');
	}
	
	public function send_reg() {
	    $param = array();
	    $param['fname'] = $this->input->post('fname');
	    $param['lname'] = $this->input->post('lname');
	    $param['email'] = $this->input->post('email');
	    $param['street'] = $this->input->post('street');
	    $param['city'] = $this->input->post('city');
	    $param['state_cd'] = $this->input->post('state');
	    $param['zip_cd'] = $this->input->post('zip');
	    $param['phone'] = $this->input->post('phone');
	    $param['facebook'] = $this->input->post('facebook');
	    $param['twitter'] = $this->input->post('twitter');
	    $param['linkedin'] = $this->input->post('linkedin');
	    $param['type'] = $this->input->post('type');
	    
	    $this->load->view('template/header_gen', array('logged' => FALSE));
	    
	    if($param['lname'] == '' || $param['fname'] == '' || valid_email($param['email']) != TRUE || $param['street'] == '' || $param['city'] == ''
	        || $param['zip_cd'] == '' || $param['phone'] == '') {
	            
	            $data = $param;
	            $data['state'] = $param['state_cd'];
	            $data['zip'] = $param['zip_cd'];
	            $data['title'] = 'Error!';
	            $data['msg'] = '<span style="color: red">Please, fill all the required information. Thank you!</span>';
	            
	            $this->load->view('public/register_view', $data);
	            
	        }
	        else {
	            if($this->User_model->register($param)) {
	                $data['title'] = 'Thank you!';
	                $data['msg'] = 'Your registration has been sent. You will get an email with further instructions within 72 hours.
                                    Thank you!<br><br>';
	            }
	            else {
	                $data['title'] = 'Error!';
	                $data['msg'] = '<span style="color: red">The email you provided is already in use. Please, use different email. Thank you!</span>';
	            }
	            
	            $this->load->view('status/status_view', $data);
	        }
	        $this->load->view('template/footer');
	}
}
