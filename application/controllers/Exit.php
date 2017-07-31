<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Exit extends CI_Controller{

	public function index()
	{
		$this->load->view('salida_view', $data);
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
}