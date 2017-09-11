<?PHP


defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function registrar($data)
    {
        $nombres         = $this->input->post('nombres');
        $apellidos       = $this->input->post('apellidos');
        $lugar           = $this->input->post('lugar');
        $fech_nacimiento = $this->input->post('fech_nacimiento');
        $cedula          = $this->input->post('cedula');
        $email           = $this->input->post('email');
        $edad            = $this->input->post('edad');
        $nacionalidad    = $this->input->post('nacionalidad');
        $celular         = $this->input->post('celular');
        $data            = array(

            'nombres'         => $nombres,
            'apellidos'       => $apellidos,
            'lugar'           => $lugar,
            'fech_nacimiento' => $fech_nacimiento,
            'cedula'          => $cedula,
            'email'           => $email,
            'edad'            => $edad,
            'nacionalidad'    => $nacionalidad,
            'celular'         => $celular,
        );
        $result = $this->db->insert('estudiante', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}


defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

  


function registrar(){
	$nombres = $this->input->post('nombres');
	$apellidos = $this->input->post('apellidos');
	$lugar = $this->input->post('lugar');
	$fech_nacimiento = $this->input->post('fech_nacimiento');
	$cedula = $this->input->post('cedula');
	$email = $this->input->post('email');
	$edad = $this->input->post('edad');
	$nacionalidad = $this->input->post('nacionalidad');	
	$celular = $this->input->post('celular');
	$data = array(
			'id_estudiante' =>'',
			'nombres' => $nombres,
			'apellidos'=>$apellidos ,
			'lugar'	=>	 $lugar,
			'fech_nacimiento'=>	 $fech_nacimiento,
			'cedula'=>	 $cedula,
			'email'	=>	 $email,
			'edad'	=>	 $edad,
			'nacionalidad'=>$nacionalidad,
			'celular'=>	 $celular,
			

			);
		$this->db->insert('estudiante', $data);
	}



    }
    





?>

