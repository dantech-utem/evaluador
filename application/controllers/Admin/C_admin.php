<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_examen');
		$this->load->model('M_preguntas');
		$this->load->model('M_login');
		$this->load->model('M_usuarios');
		$this->load->helper('url', 'form');
		$this->load->model('M_agregarUsuarios');
		$this->load->model('M_editarUsuarios');
		$this->load->model('M_prototipo');
	}
	public function InicioA()
	{
		$datos["title_meta"] = "Admin";
		$data['conteo'] = $this->M_prototipo->C_usuarios();
		$data['conteo_e'] = $this->M_prototipo->C_examenes();
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/InicioA', $data);
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
		$data['examenes']=$this->M_examen->obtenerExamenes();
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/O_examen', $data);
		$this->load->view('templates/footer');
	}
	public function actualizar_estatus($id_examenes, $estatus) {
		$this->M_examen->actualizar_estatus($id_examenes, $estatus);
		//echo $id_examenes, $estatus;
		if( $this->db->affected_rows() == 0 ){ 
			$bandera = false;
		}
		else {
			$bandera = true;
		}
		echo json_encode($bandera);
	}
	public function O_pregunta()
	{
		$datos["title_meta"] = "Vista Examen";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/O_pregunta');
		$this->load->view('templates/footer');
	}
	
	public function updateExamen($id) {
		$titulo = $this->input->post('examen');
		$preguntas_seleccionadas = array_keys($this->input->post('preguntas'));
	
		$config['upload_path'] = './assets/images/examenes';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;
		$this->load->library('upload', $config);
	
		if ($this->upload->do_upload('imagen_examen')) {
			$upload_data = $this->upload->data();
			$imagen_examen = $upload_data['file_name'];
	
			$data = array(
				'titulo' => $titulo,
				'imagen_examen' => $imagen_examen
			);
			$this->db->where('id_examenes', $id);
			$this->db->update('examenes', $data);

			$preguntas_examenes_actuales = $this->M_examen->obtenerPreguntasExamenes($id);
	
			foreach ($preguntas_examenes_actuales as $pregunta_actual) {
				$pregunta_id = $pregunta_actual->pregunta_id;
				$estatus = in_array($pregunta_id, $preguntas_seleccionadas) ? 1 : 0;
				$this->M_examen->asociar_pregunta($id, $pregunta_id, $estatus);
			}
	
			redirect('Admin/C_admin/editExamen/'.$id);
		} else {
			// Error en la carga del archivo
			$data['error'] = "Por favor suba una imagen.";
			$this->load->view('Admin/C_examen', $data);
		}
	}

    public function storeExamen() {
        $titulo = $this->input->post('examen');
		$preguntas_seleccionadas = array_keys($this->input->post('preguntas'));

        $config['upload_path'] = './assets/images/examenes';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('imagen_examen')) {
            $upload_data = $this->upload->data();
            $imagen_examen = $upload_data['file_name'];
            
            $data = array(
                'titulo' => $titulo,
                'imagen_examen' => $imagen_examen
            );
            $this->db->insert('examenes', $data);
            if ($this->db->affected_rows() > 0) {
				$examen_id = $this->db->insert_id();
			}
	
			foreach ($this->M_preguntas->obtenerPreguntas() as $pregunta) {
				$this->M_examen->asociar_pregunta($examen_id, $pregunta->id_preguntas, 0);
			}
	
			foreach ($preguntas_seleccionadas as $pregunta_id) {
				$this->M_examen->asociar_pregunta($examen_id, $pregunta_id, 1);
			}
            
            redirect('Admin/C_admin/O_examen');
        } else {
            // Error en la carga del archivo
            $data['error'] = "Por favor suba una imagen.";
            $this->load->view('Admin/C_examen', $data);
        }
    }
	
	public function C_examen()
	{
		$data["title_meta"] = "Vista Examenes nuevos";
		$datos['preguntas']=$this->M_preguntas->obtenerPreguntas();
		$this->load->view('templates/header',$data);
		$this->load->view('Admin/C_examen', $datos);
		$this->load->view('templates/footer');
	}
	
	public function editExamen($id){
		$data["title_meta"] = "Editar Examen";
		$datos['preguntasexam']=$this->M_examen->obtenerPreguntasExamenes($id);
		$datos['examen']= $this->M_examen->getExamenId($id);
		$datos['preguntas']=$this->M_preguntas->obtenerPreguntas();

    	// Verificar si hay nuevas preguntas en la base de datos y vincularlas con estado 0
    	$preguntas_seleccionadas = array_column($datos['preguntasexam'], 'pregunta_id');
    	$preguntas_actuales = $this->M_preguntas->obtenerPreguntas();
    	foreach ($preguntas_actuales as $pregunta) {
    	    if (!in_array($pregunta->id_preguntas, $preguntas_seleccionadas)) {
    	        // La pregunta no estaba seleccionada previamente, vincularla con estado 0
    	        $this->M_examen->asociar_pregunta($id, $pregunta->id_preguntas, 0);
    	        // Agregar la nueva pregunta al arreglo de preguntas seleccionadas para mostrarla en la vista
    	        $preguntas_seleccionadas[] = $pregunta->id_preguntas;
    	    }
    	}		

		$this->load->view('templates/header',$data);
        $this->load->view('Admin/C_examen', $datos);
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
		$data['usuarios']=$this->M_usuarios->obtenerUsuarios();
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/Cn_resultados', $data);
		$this->load->view('templates/footer');
	}
	public function R_contrasena()
	{
		$datos["title_meta"] = "Vista Resultados";
		$this->load->view('templates/header',$datos);
	
		$this->load->view('Admin/R_contrasena');
		$this->load->view('templates/footer');
	}



	public function R_examenAdmin($id_usuario){
		$datos["title_meta"] = "Resultado de examen";
		$data['calificaciones']=$this->M_examen->obtenerCalificacion($id_usuario);
		$this->load->view('templates/header',$datos);
		$this->load->view('Alumno/R_examen', $data);
		$this->load->view('templates/footer');
	}
}