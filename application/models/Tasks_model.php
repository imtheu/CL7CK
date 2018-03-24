<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks_model extends CI_Model {

	public function save($task_data){
		$this->db->insert('tasks', $task_data);
	}	

	public function get($task_id){
		$this->db->where('id', $task_id);
		return $this->db->get('tasks')->row_array();
	}

	public function getAll($goal_id){
		$this->db->where('goal_id', $goal_id);
		return $this->db->get('tasks')->result_array();
	}

	public function update($task_data){
		$this->db->where('id', $task_data['id']);
		$this->db->update('tasks', $task_data);
	}

	public function delete($task_id){
		$this->db->where('id', $task_id);
		$this->db->delete('tasks');
	}
}