
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

    public function index()
    {

    }

    public function student_view()
    {
        $this->load->view('student_view');
        $this->load->model('student_model');
        $nombres         = $this->input->get('nombres');
        $apellidos       = $this->input->get('apellidos');
        $lugar           = $this->input->get('lugar');
        $fech_nacimiento = $this->input->get('fech_nacimiento');
        $cedula          = $this->input->get('cedula');
        $email           = $this->input->get('email');
        $edad            = $this->input->get('edad');
        $nacionalidad    = $this->input->get('nacionalidad');
        $celular         = $this->input->get('celular');

        $data = $this->student_model->registrar($nombres, $apellidos, $lugar, $fech_nacimiento, $cedula, $email, $edad, $nacionalidad, $celular);

    }

}

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


