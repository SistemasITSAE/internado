<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if (isset($_POST['password'])){$this->load->model('usuario_model');
			if ($this->usuario_model->Login	($_POST['username'],$_POST['password'])){
			redirect('welcome');
			}else{
				redirect('login');
			}
		}
		$this->load->view('login');
	}
}
 ?>	