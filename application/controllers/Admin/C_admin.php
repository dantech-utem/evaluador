<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct(){
		parent::__construct();

		$this->load->model('M_examen');
		$this->load->model('M_preguntas');
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
		$this->load->view('Admin/R_usuarios');
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

	public function Cn_resultados()
	{
		$datos["title_meta"] = "Vista Resultados";
		$this->load->view('templates/header',$datos);
		$this->load->view('Admin/Cn_resultados');
		$this->load->view('templates/footer');
	}

}
