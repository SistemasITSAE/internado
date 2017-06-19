<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller{

	public function index()
	{		
		echo 'Esta es la nueva vista';
		}

	public function student_view(){

		$this->load->view('student_view');
		


		
	}
}