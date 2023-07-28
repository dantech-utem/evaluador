<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Usuarios extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_agregarUsuarios');
        $this->load->model('M_editarUsuarios');
		
		
    }
    
    public function E_Usuario($id_usuario)
	{
		$datos["title_meta"] = "Editar Usuario";
		$this->load->view('templates/header',$datos);
        $usuario = $this->M_editarUsuarios->obtenerUsuarioPorID($id_usuario);
        $data['usuario'] = $usuario;
		$this->load->view('Admin/E_Usuario', $data);
		$this->load->view('templates/footer');
	}

    public function editarUsuario(){

        $id_usuario = $this->input->post('id_usuario');
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $correo = $this->input->post("correo");
        $contrasena = $this->input->post("contrasena");
        $confirmar_contrasena = $this->input->post('confirmar_contrasena');
        $tipousuario = $this->input->post("tipo_usuario");
        $foto_perfil = $this->input->post("foto_perfil");
    
    
        // Verificar si las contraseñas coinciden.
        if ($contrasena === $confirmar_contrasena) {
            $this->M_editarUsuarios->editarUsuario($id_usuario,$nombre,$apellido,$correo,$contrasena,$tipousuario,$foto_perfil);
            // Redireccionar o mostrar mensaje de éxito
            $datos["title_meta"] = "Registro";
		$this->load->view('templates/header',$datos);
		$data['usuarios'] = $this->M_agregarUsuarios->obtenerUsuarios();
		$this->load->view('Admin/O_usuarios', $data);
		$this->load->view('templates/footer');
            }
            else {
                // Si las contraseñas no coinciden, puedes mostrar un mensaje de error o redireccionar al formulario nuevamente.
                $data['error'] = "Las contraseñas no coinciden. Intenta de nuevo.";
                $datos["title_meta"] = "Editar Usuario";
                $this->load->view('templates/header',$datos);
                $usuario = $this->M_editarUsuarios->obtenerUsuarioPorID($id_usuario);
                $data['usuario'] = $usuario;
                $this->load->view('Admin/E_Usuario', $data);
                $this->load->view('templates/footer');
                
                
            }	
    }

	public function R_usuarios()
	{
		$datos["title_meta"] = "Registro";
		$this->load->view('templates/header',$datos);
		$data['usuarios'] = $this->M_agregarUsuarios->obtenerUsuarios();
		$this->load->view('Admin/O_usuarios', $data);
		$this->load->view('templates/footer');
	}
    public function agregarUsuario(){

        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $correo = $this->input->post("correo");
        $contrasena = $this->input->post("contrasena");
        $confirmar_contrasena = $this->input->post('confirmar_contrasena');
        $tipousuario = $this->input->post("tipo_usuario");
        $foto_perfil = $this->input->post("foto_perfil");
    
    
        // Verificar si las contraseñas coinciden.
        if ($contrasena === $confirmar_contrasena) {
            $this->M_login->agregarUsuario($nombre,$apellido,$correo,$contrasena,$tipousuario,$foto_perfil);
            // Redireccionar o mostrar mensaje de éxito
            $this->R_usuarios();
            }
            else {
                // Si las contraseñas no coinciden, puedes mostrar un mensaje de error o redireccionar al formulario nuevamente.
                $data['error'] = "Las contraseñas no coinciden. Intenta de nuevo.";
                $datos["title_meta"] = "Crear Usuario";
                $this->load->view('templates/header',$datos);
                $this->load->view('Admin/C_Usuario',$data);
                $this->load->view('templates/footer');
                
                
            }	
        }

        public function actualizarEstado($id_usuarios) {
            // Obtiene el estado actual del usuario desde el formulario
            $estado_usuario = $this->input->post('estado_usuario');
        
            // Llama al modelo para actualizar el estado del usuario
            $this->M_agregarUsuarios->actualizarEstadoUsuario($id_usuarios, $estado_usuario);
        
            // Redirige a la página principal o a la lista de usuarios
            $this->R_usuarios();
            
        }

    public function AsignarE($id_usuarios)
	{
		$datos["title_meta"] = "Admin";
		$this->load->view('templates/header',$datos);
		$data['examenes'] = $this->M_login->obtenerExamenes();
        $data['id_usuarios'] = $id_usuarios;
		$this->load->view('Admin/A_Examen', $data);
        // Pasa el ID del usuario a la vista
        
		$this->load->view('templates/footer');
	}
    public function asignarExamen($id_usuarios) {
       
        $examenes_seleccionados = $this->input->post('examenes');
    
        // Procesa la asignación de exámenes
        $this->M_agregarUsuarios->asignarExamenesUsuario($id_usuarios, $examenes_seleccionados);
    
        // Redirige a la página original o a cualquier otra que desees mostrar después de asignar los exámenes
        $this->R_usuarios();
    }
    
    

}
