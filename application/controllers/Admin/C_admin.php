<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	 public function __construct(){
		parent::__construct();

		$this->load->model('M_examen');
		$this->load->model('M_preguntas');
		$this->load->model('M_login');
		$this->load->model('M_agregarUsuarios');
	}

	public function InicioA()
	{
		$datos["title_meta"] = "Admin";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/InicioA');
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

	
	
	public function storeExamen(){
		$titulo = $this->input->post('examen');
    	$data = array(
			'titulo' => $titulo
    	);
    	$this->db->insert('examenes', $data);
		if( $this->db->affected_rows() > 0 ) {
			$examen_id = $this->db->insert_id();
		}
		foreach($this->input->post('preguntas') as $key=>$pregunta){
			$registro=array('examen_id'=>$examen_id, 'pregunta_id'=>$key);
			$this->M_examen->insertarPreguntasExamenes($registro);	
		}
    	redirect('Admin/C_admin/C_examen');
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
		$this->load->view('templates/header',$data);
        $this->load->view('Admin/C_examen', $datos);
        $this->load->view('templates/footer');
	}

	public function updateExamen($id){
		$titulo = $this->input->post('examen');
        $data = array(
            'titulo' => $titulo
        );
        $this->db->where('id_examenes', $id);
        $this->db->update('examenes', $data);
		$this->M_examen->borrarPreguntasExamenes($id);
		foreach($this->input->post('preguntas') as $key=>$pregunta){
			$registro=array('examen_id'=>$id, 'pregunta_id'=>$key);
			$this->M_examen->insertarPreguntasExamenes($registro);	
		}
		        redirect('Admin/C_admin/editExamen/'.$id);
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

	public function R_contrasena()
	{
		$datos["title_meta"] = "Vista Resultados";
		$this->load->view('templates/header',$datos);
		$data['usuarios'] = $this->M_agregarUsuarios->obtenerUsuarios();
		$this->load->view('Admin/R_contrasena',$data);
		$this->load->view('templates/footer');
	}

}
