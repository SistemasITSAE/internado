<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	 function login($email, $password){
		$this->db->select('id,tipo,fullname,email,password,date,status');
		$this->db->from('login');
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows()==1){
			return $query->result();
		}else {   
			return false;
		}	
	}

	function register(){
		$tp = $this->input->post('type');
		$fn = $this->input->post('fullname');
		$em = $this->input->post('email');
		$pw = md5($this->input->post('password'));
		$dt = $this->input->post('date');
		$st = $this->input->post('status');
		$data = array(
			'id' =>'',
			'fullname' => $fn,
			'email' => $em,
			'password' => $pw,
			'date' =>'',
			'status' =>''
			);
		$this->db->insert('login', $data);
	}
		/*
		function exit(){
		$nm = $this->input->post('name');
		$mt = $this->input->post('motive');
		$pl = $this->input->post('place');
		$et = $this->input->post('exit');
		$rt = $this->input->post('return');
		$data = array(
			'id_salida' =>'',
			'name' => $nm,
			'motive' => $mt,
			'place' => $pl,
			'exit' =>'et',
			'return' =>'rt'
			);
		$this->db->insert('exit', $data);
	}*/
}
