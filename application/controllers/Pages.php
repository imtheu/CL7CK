<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index(){	
		$data = array(
			'title' => 'CL7CK - An AMAZING Time Management App'
		);
		$this->load->view('template/header', $data);
		$this->load->view('pages/home');
		$this->load->view('template/footer');
	}

	public function about(){
		$data = array(
			'title' => 'CL7CK - About us'
		);
		$this->load->view('template/header', $data);
		$this->load->view('pages/about');
		$this->load->view('template/footer');
	}

	public function signup(){

		if(!$this->session->userdata('logged_user')){
			$data = array(
				'title' => 'CL7CK - Sign up'
			);
			$this->load->view('template/header', $data);
			$this->load->view('pages/signup');
			$this->load->view('template/footer');
		}else{
			redirect('/app','refresh');
		}

	}

	public function login(){

		if(!$this->session->userdata('logged_user')){
			$data = array(
				'title' => 'CL7CK - Log in'
			);
			$this->load->view('template/header', $data);
			$this->load->view('pages/login');
			$this->load->view('template/footer');
		}else{
			redirect('/app','refresh');
		}
	}

}
