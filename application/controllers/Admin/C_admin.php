<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
		
    }


	public function InicioA()
	{
		$datos["title_meta"] = "Admin";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/InicioA');
		$this->load->view('templates/footer');
	}

	public function R_usuarios()
	{
		$datos["title_meta"] = "Registro";
		$this->load->view('templates/header',$datos);
		$data['examenes'] = $this->M_login->obtenerExamenes();
		
		$this->load->view('Admin/R_usuarios', $data);
		$this->load->view('templates/footer');
	}
	public function agregarUsuario(){

		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$correo = $this->input->post("correo");
		$contrasena = $this->input->post("contrasena");
		$tipousuario = $this->input->post("tipo_usuario");
		$examenesSeleccionados = $this->input->post('examenes');
		
			$usuario_id = $this->M_login->agregarUsuario($nombre,$apellido,$correo,$contrasena,$tipousuario);
			
			if ($usuario_id) {
                // Asociar los exámenes seleccionados al usuario
                $this->M_login->asociarExamenesUsuario($usuario_id, $examenesSeleccionados);

                // Redireccionar o mostrar mensaje de éxito
				$this->R_usuarios();
            } else {
                // Mostrar mensaje de error en caso de que falle la creación del usuario
                echo "Error al crear el usuario";
            }
			
	}

	public function AsignarE()
	{
		$datos["title_meta"] = "Admin";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/A_Examen');
		$this->load->view('templates/footer');
	}
	
	public function C_pregunta()
	{
		$datos["title_meta"] = "Crear Examen";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/C_pregunta');
		$this->load->view('templates/footer');
	}

	public function O_examen()
	{
		$datos["title_meta"] = "Vista Examen";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/O_examen');
		$this->load->view('templates/footer');
	}


	public function C_examen()
	{
		$datos["title_meta"] = "Vista Examenes nuevos";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/C_examen');
		$this->load->view('templates/footer');
	}


	public function C_Usuario()
	{
		$datos["title_meta"] = "Crear Usuario";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/C_Usuario');
		$this->load->view('templates/footer');
	}
	public function Cn_resultados()
	{
		$datos["title_meta"] = "Vista Resultados";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/Cn_resultados');
		$this->load->view('templates/footer');
	}

}
