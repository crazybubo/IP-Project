<?php

class Profiles Extends CI_Controller{

	/*function __construct(){

		parrent::construct();
		$this->load->library('session');
	}*/

	function index(){

		$user = $this->session->userdata('username');
		if(isset($user)){
			$data['username'] = $this->session->userdata('username');
			$data['firstName'] = $this->session->userdata('firstname');
			$data['lastName'] = $this->session->userdata('lastname');
			$this->load->view('header');
			$this->load->view('profile', $data);
			$this->load->view('footer');
		} else {
			$this->load->view('header');
			$this->load->view('profile');
			$this->load->view('footer');
		}
	}

	function view_profile(){

		$this->load->view('header');
		$this->load->view('view_profile');
		$this->load->view('footer');
	}
}