<<<<<<< HEAD
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
=======
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
>>>>>>> 815ea5f7d11d0b87c1f2d97ecbd99859d15f37f2
