<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model
{
	function login($username, $password){
		$this->db->select('id,username,password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_row()==1) {
			return $query->result();
		}else{
			return false;
		}
		
	}
}
 ?>	