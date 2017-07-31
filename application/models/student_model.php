<?PHP


defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

  
    public function __construct(){  
    }

function register(){
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
			'id' =>'',
			'nombres' => $nombres,
			'apellidos'=>$apellidos ,
			'lugar'	=>	 $lugar
			'fech_nacimiento'=>	 $fech_nacimiento
			'cedula'=>	 $cedula
			'email'	=>	 $email
			'edad'	=>	 $edad
			'nacionalidad'=>$nacionalidad
			'celular'=>	 $celular
			

			);
		$this->db->insert('estudiantes', $data);
	}



 /*   public function registr($nombres, $apellidos, $lugar, $fech_nacimiento, $email, $edad, $nacionalidad, $celular, $salud_id_salud, $carrera_id_carrera, $representante_id_representante, $religion_id_religion, $login_id_login, $adventistas_id_adventistas)
    {
        global $conexion;
        $consulta="INSERT INTO estudiantes (nombres, apellidos, lugar, fech_nacimiento,cedula,email, edad , nacionalidad, celular,salud_id_salud,carrera_id_carrera,representante_id_representante,religion_id_religion,login_id_login,adventistas_id_adventistas )
VALUES('$nombres', '$apellidos', '$lugar', CURDATE(),'$cedula','$email', '$edad' , '$nacionalidad', '$celular','$salud_id_salud','$carrera_id_carrera','$representante_id_representante','$religion_id_religion','$login_id_login','$adventistas_id_adventistas');";
    
            $resultado=$conexion->query($consulta);
        return $resultado;	

   $this->db->insert('student', $resultado);
    }
    
    public function listar(){
          global $conexion;
        
         $consulta="SELECT * FROM estudiantes";
             
            $resultado=$conexion->query($consulta);
        return $resultado;
        
        
    }
     public function eliminar($id_estudiantes){
          global $conexion;
        
         $consulta="DELETE FROM estudiantes WHERE id_estudiantes=$id_estudiantes";
             
            $resultado=$conexion->query($consulta);
        return $resultado;
        
        
    }
    
     
        public function actualizar($nombres, $apellidos, $lugar, $fech_nacimiento, $cedula, $email, $edad, $nacionalidad, $celular, $salud_id_salud, $carrera_id_carrera, $representante_id_representante, $religion_id_religion, $login_id_login, $adventistas_id_adventistas)
    {
        
        global $conexion;
        $consulta="UPDATE estudiantes SET 

nombres='$nombres',, apellidos='$apellidos', lugar='$lugar',, fech_nacimiento='$fech_nacimiento',cedula='$cedula',email='$email',edad='$edad', nacionalidad='$nacionalidad', celular='$celular',salud_id_salud='$salud_id_salud',,carrera_id_carrera='$carrera_id_carrera',representante_id_representante='$representante_id_representante',religion_id_religion='$religion_id_religion',login_id_login='$login_id_login',adventistas_id_adventistas='$adventistas_id_adventistas' WHERE id_estudiantes=$id_estudiantes";
  
            $resultado=$conexion->query($consulta);
        return $resultado;

    */
    }
    
    
}





}
?>
