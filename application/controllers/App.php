<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Page controller of the application */

class App extends CI_Controller {

	public function index()	{
		$user_data = $this->session->userdata('logged_user');
		$this->load->model('goals_model');
		$goals = $this->goals_model->getAll($user_data['id']);
		
		$header_data = array(
			'title' => 'CL7CK: Dashboard'
		);

		date_default_timezone_set('America/Sao_Paulo');
		
		$page_data = array(
			'user_name' => $user_data['name'],
			'date' => date('d/m/Y'),
			'goals' => $goals
		);

		$this->load->view('template/app/header', $header_data);
		$this->load->view('pages/app/home', $page_data);
		$this->load->view('template/footer');
	}

	public function new_goal(){
		$header_data = array(
			'title' => 'CL7CK: New goal'
		);
		$this->load->view('template/app/header', $header_data);
		$this->load->view('pages/app/new_goal');
		$this->load->view('template/footer');
	}

	public function edit_goal(){
		$header_data = array(
			'title' => 'CL7CK: Edit goal'
		);
		$this->load->model('goals_model');
		$goal_data = $this->goals_model->get($this->uri->segment(3), $this->session->userdata('logged_user')['id']);
		$this->load->view('template/app/header', $header_data);
		$this->load->view('pages/app/edit_goal', $goal_data);
		$this->load->view('template/footer');
	}

}