<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
        $this->load->helper('url');
	}

	public function index(){	
		
		$this->load->view('Login/login');
	}

	public function iniciarSesion() {
		$correo = $this->input->post('Usuario');
        $contraseña = $this->input->post('Contraseña');

        $user = $this->M_login->obtenerUsuario($correo, $contraseña);

        if ($user) {
            $this->session->set_userdata('id_perfil', $user->id_perfil);
			$this->session->set_userdata('nombre_usuario', $user->nombre);

            if ($user->id_perfil == '1') {
				$datos["title_meta"] = "Admin";
				$this->load->view('templates/header',$datos);
				$this->load->view('Admin/InicioA');
				$this->load->view('templates/footer');
            } else {
				$datos["title_meta"] = "Alumno";
				$this->load->view('templates/header',$datos);
				$this->load->view('Alumno/InicioU');
				$this->load->view('templates/footer');
            }
        } else {
            $data['error'] = 'Usuario o contraseña incorrectos.';
            $this->load->view('login', $data);
            $datos["title_meta"] = "Login";
            $this->load->view('templates/head-css',$datos);
        }
    }

    public function recuperar()
	{
		$this->load->view('Login/recuperar');
	}

	public function nuevacontra()
	{
		$this->load->view('nuevacontra');
	}


	public function salir()
	{
		session_start();
		session_destroy();
		header('Location:'.base_url()."index.php/C_login/index");
	}
	

}
?>