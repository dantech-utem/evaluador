<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Preguntas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_prototipo');
	}
    public function Guardarpregunta(){
		//print_r($this->input->post());
		$res = $this->input->post('outer-group');
		//print_r($res [0]['inner-group']);	
		$pregunta = array(
			"texto" => $res [0]['pregunta_texto']
		);
		$this->M_prototipo->guardarpregunta($pregunta);
		if( $this->db->affected_rows() > 0 )
		{
			$pregunta_id = $this->db->insert_id();
			foreach($res[0]['inner-group'] as $respuestas)
				{
					$this->Guardarrespuesta($pregunta_id, $respuestas);
				}
			
			$this->load->view("templates/header");
			$this->load->view("Admin/O_pregunta");
			$this->load->view("templates/footer");
		} 


	} 

	public function Guardarrespuesta($id_pregunta,$POST)
	{
		//print_r($this->input->post());
		$respuesta = array(
			"texto" => $POST["respuesta_texto"],
			"pregunta_id" => $id_pregunta,
			"es_correcta" => isset($POST['flexRadioDefault1']) ? 1 : 0,
		);	
		$this->M_prototipo->guardarrespuesta($respuesta);//TODO cambiar por usuario
		//Validar si se inserto correctamente


		//Dentro if (todo esta correcto) enviar o redireccionar ala vista de usuarios(listado)
		if ($this->db->affected_rows() > 0)
		{
			//$this->users();
		}
		
	}
}
?>