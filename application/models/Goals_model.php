<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals_model extends CI_Model {

	public function getAll($user){
		$this->db->where('user_id', $user);
		return $this->db->get('goals')->result_array();
	}

	public function get($id, $user){
		$this->db->where('user_id', $user);
		$this->db->where('id', $id);
		return $this->db->get('goals')->row_array();
	}

	public function save($goal){
		$this->db->insert('goals', $goal);
		return $this->db->insert_id();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('goals');
	}

	public function update($goal){
		$this->db->where('id', $goal['id']);
		$this->db->update('goals', $goal);
	}
}