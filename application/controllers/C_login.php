<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->library("phpmailer_lib");
        $this->load->model('M_agregarUsuarios');
        

	}
//VISTAS
	public function index(){	
		
		$this->load->view('Login/login');
	}
	public function recuperar(){	
		
		$this->load->view('Login/recuperar');
	}
	public function nuevaContrasena($token) {
        // Verifica si el token es válido y está asociado a un usuario en la base de datos.
        // Implementa la lógica de acuerdo a tu estructura de base de datos y modelo.
        $user = $this->M_login->obtenerToken($token);

        // Si el token no es válido o ha expirado, puedes mostrar un mensaje de error o redireccionar a una página de error.
        // Si es válido, muestra el formulario de cambio de contraseña.
        if (!$user) {
            echo "Token inválido o ha expirado. Por favor, solicita un nuevo enlace para restablecer la contraseña.";
        } else {
            $data['token'] = $token;
            $this->load->view('Login/nuevacontra', $data);
        }
	}
    

//FUNCIONES
	public function iniciarSesion() {
		$correo = $this->input->post('Usuario');
        $contraseña = $this->input->post('Contraseña');

        $user = $this->M_login->obtenerUsuario($correo, $contraseña);

        if ($user) {
            $this->session->set_userdata('id_perfil', $user->id_perfil);
			$this->session->set_userdata('nombre_usuario', $user->nombre);
            
            $this->session->set_userdata('id_usuario', $user->id_usuarios);
            $this->session->set_userdata('correo', $user->correo_electronico);
            $this->session->set_userdata('contrasena', $user->contraseña);
            

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
        }
            else {
            $data['error'] = 'Usuario o contraseña incorrectos ';
       		$this->load->view('Login/login', $data);
            }
        }
    

    public function enviarCorreo(){
        // Obtener el correo electrónico del formulario de solicitud de restablecimiento de contraseña
        $correo = $this->input->post('correo');

		

        // Verificar si el correo electrónico existe en la base de datos
        $user = $this->M_login->obtenerCorreo($correo);
		
		


        if ($user) {
            //generar un token único para el restablecimiento de contraseña
            $token = uniqid();

            //guardar el token en la base de datos junto con la información del usuario
          
			$this->M_login->guardarToken($user->id_usuarios, $token);

			// Configuración del correo electrónico
			$mail = $this->phpmailer_lib->load();

			$mail->addAddress($correo);
			$mail->Subject = "Recuperacion de contraseña";
			$mail->Body = site_url()."/C_login/nuevaContrasena/".$token;
	
		   if ($mail->send()) {
            
        	$data['success'] = "Correo enviado correctamente.";
       		$this->load->view('Login/recuperar', $data);
			} else {
				  echo "Mailer Error " . $mail->ErrorInfo;
							
			}
        } else {
            //el correo electrónico no existe en la base de datos
            $data['failed'] = "Correo no encontrado.";
       		$this->load->view('Login/recuperar', $data);
			
        }
    }

	public function guardarNuevaContrasena() {
        // Obtener los datos del formulario.
        $token = $this->input->post('token');
        $contrasena = $this->input->post('contrasena');
        $confirmar_contrasena = $this->input->post('confirmar_contrasena');

        // Verificar si las contraseñas coinciden.
        if ($contrasena === $confirmar_contrasena) {
            // Verifica si el token es válido y está asociado a un usuario en la base de datos.
            // Implementa la lógica de acuerdo a tu estructura de base de datos y modelo.
            $user = $this->M_login->obtenerToken($token);

            if (!$user) {
                echo "Token inválido o ha expirado. Por favor, solicita un nuevo enlace para restablecer la contraseña.";
            } else {
                // Actualizar la contraseña del usuario.
                // Implementa la lógica de acuerdo a tu estructura de base de datos y modelo.
             $this->M_login->guardarNuevaContrasena($user['id_usuarios'], $contrasena);

                // Puedes mostrar un mensaje de éxito o redireccionar a una página de éxito.
            $data['success'] = "Contraseña actualizada correctamente.";
            $this->load->view('Login/login', $data);
            }
        } else {
            // Si las contraseñas no coinciden, puedes mostrar un mensaje de error o redireccionar al formulario nuevamente.
            $data['token'] = $token;
        	$data['error'] = "Las contraseñas no coinciden. Intenta de nuevo.";
       		$this->load->view('Login/nuevacontra', $data);
            
        }
    }
    public function editarContrasena() {
        $id_usuario = $this->input->post('id_usuarios');
        $contrasena = $this->input->post('contrasena');
        $confirmar_contrasena = $this->input->post('confirmar_contrasena');

        // Verificar si las contraseñas coinciden.
        if ($contrasena === $confirmar_contrasena) {
            
             $this->M_login->editarContrasena($id_usuario,$contrasena);

           
             
             $datos["title_meta"] = "Vista Resultados";
             $this->load->view('templates/header',$datos);
             $data['usuarios'] = $this->M_agregarUsuarios->obtenerUsuarios();
             $this->load->view('Admin/R_contrasena',$data);
             $this->load->view('templates/footer');
             
            
        } else {
            
        	$datos["title_meta"] = "Vista Resultados";
		$this->load->view('templates/header',$datos);
		$data['usuarios'] = $this->M_agregarUsuarios->obtenerUsuarios();
		$this->load->view('Admin/R_contrasena',$data);
		$this->load->view('templates/footer');
            
        }
    }
    
		


	public function salir()
	{
		session_start();
		session_destroy();
		header('Location:'.base_url()."index.php/C_login/index");
	}
	

}
?>