<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

	public function save($user){
		$this->db->insert("users", $user);
		return $this->db->insert_id();
	}

	public function validate($email){
		$this->db->where('email', $email);
		$user = $this->db->get('users')->row_array();
		return $user;
	}

}