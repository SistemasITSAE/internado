<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index()
	{		
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = ['id'];
			$data['fullname'] = ['fullname'];
			$data['email'] = ['email'];
			$this->load->view('home_view', $data);
		}else {
			redirect('login','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(site_url('login'),'refresh');
	}
	public function home_view()
	{
		
		redirect(site_url('home'),'refresh');
	}

}
