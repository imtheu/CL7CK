<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function new_task()	{
		
		$form_data = $this->input->post();
		$task_data = array(
			'name' => $form_data['name'],
			'description' => $form_data['description'],
			'date' => $form_data['date'],
			'status' => $form_data['status'],
			'date' => date('Y/m/d', strtotime($form_data['date'])),
			'creation_date' => date('Y/m/d'),
			'user_id' => $this->session->userdata('logged_user')['id'],
			'goal_id' => $form_data['goal_id']
		);

		$this->load->model('tasks_model');
		$this->tasks_model->save($task_data);

		redirect('/app/goal/' . $form_data['goal_id'], 'refresh');

	}

	public function change(){

		$form_data = $this->input->post();
		$this->load->model('tasks_model');

		if($form_data['submit'] == 'complete'){
			$task_data = $this->tasks_model->get($form_data['task_id']);
			$task_data['status'] = 'completed';
			$this->tasks_model->update($task_data);
		}
		elseif($form_data['submit'] == 'delete'){
			$this->tasks_model->delete($form_data['task_id']);
		}

		redirect('/app/goal/' . $form_data['goal_id'], 'refresh');

	}

}