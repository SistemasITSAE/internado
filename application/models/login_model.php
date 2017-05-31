<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username, $password){
		$this->db->select('id,fullname,username,password');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_row()==1){
			return $query->result();
		}else {   
			return false;
		}	
	}

	function register(){
		$fn = $this->input->post('fullname');
		$un = $this->input->post('username');
		$pw = md5($this->input->post('password'));
		$data = array('id' =>'' , 'fullname' => $fn, 'username' => $un, 'password' => $pw);
		$this->db->insert('user', $data);
	}
}
   