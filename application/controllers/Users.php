<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register(){
		
		date_default_timezone_set('America/Sao_Paulo');
		$form_data = $this->input->post();

		$user_data = array(
			'name' => $form_data['name'],
			'email' => $form_data['email'],
			'password' => password_hash($form_data['password'], PASSWORD_BCRYPT),
			'signup_date' => date('Y-m-d H:i:s'),
		);
		
		$this->load->model('users_model');
		$this->users_model->save($user_data);
	}

	public function login(){

		$form_data = $this->input->post();
		$this->load->model('users_model');
		$user = $this->users_model->validate($form_data['email']);

		if(password_verify($form_data['password'], $user['password']))
			echo "Valid";
		else
			echo "Invalid";


	}

}
