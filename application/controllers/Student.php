<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{

	public function index()
	{	
	 ECHO 'NO SE REGISTRO NINGUN DATO ';
		}

	public function student_view(){
		$this->load->view('student_view');
			  if($this->input->post('guardar')) {
			$this->db->register();
				}	else{
				$this->load->view('student_view');


             
		
	}
}	
}

/*$this->load->view('student_view');
  if($this->input->post('guardar')) {
			$this->db->register();
				}	else{
				$this->load->view('student_view');
		}*/