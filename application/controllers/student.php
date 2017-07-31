<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{

	public function index()
	{		
		echo 'Esta es la nueva vista';
		}

	public function student_view(){

		$this->load->view('student_view');


         

        
				
	}

		public function register(){

		if($this->input->post('guardar')) {
			$this->student->register();
			redirect('student');
		}	else{
				$this->load->view('student_view');
		}
	}
	  
      
		
	}

