<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals extends CI_Controller {

	public function new_goal()	{

		date_default_timezone_set('America/Sao_Paulo');
		$form_data = $this->input->post();

		$goal_data = array(
			'user_id' => $this->session->userdata('logged_user')['id'],
			'name' => $form_data['name'],
			'description' => $form_data['description'],
			'creation_date' => date('Y-m-d H:i:s'),
			'deadline_date' => date('Y-m-d', strtotime($form_data['deadlinedate']))
		);

		$this->load->model('goals_model');
		$this->goals_model->save($goal_data);

		redirect('/app','refresh');

	}

	public function delete(){
		$form_data = $this->input->post();
		$this->load->model('goals_model');
		$this->goals_model->delete($form_data['id']);

		redirect('/app','refresh');
	}

	public function edit(){
		$form_data = $this->input->post();

		$goal_data = array(
			'id' => $form_data['id'],
			'user_id' => $this->session->userdata('logged_user')['id'],
			'name' => $form_data['name'],
			'description' => $form_data['description'],
			'creation_date' => date('Y-m-d H:i:s', strtotime($form_data['creation_date'])),
			'deadline_date' => date('Y-m-d', strtotime($form_data['deadlinedate']))
		);

		$this->load->model('goals_model');
		$this->goals_model->update($goal_data);

		redirect('/app/goal/' . $form_data['id'], 'refresh');
	}

	public function open(){
		$this->load->model('goals_model');
		$this->load->model('tasks_model');

		$goal_data = $this->goals_model->get($this->uri->segment(3), $this->session->userdata('logged_user')['id']);

		$header_data = array(
			'title' => 'CL7CK: ' . $goal_data['name'],
		);

		$tasks_data = array(
			'goal_id' => $this->uri->segment(3),
			'tasks' => $this->tasks_model->getAll($this->uri->segment(3))
		);

		$this->load->view('template/app/header', $header_data);
		$this->load->view('pages/app/goal', $goal_data);
		$this->load->view('pages/app/tasks', $tasks_data);
		$this->load->view('template/footer');
	}

}