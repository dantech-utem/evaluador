<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_evaluacion extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Carga el modelo para interactuar con la base de datos
        $this->load->model('M_evaluacion');
        $this->load->library('session');
    }


    public function index($examen_id) {

        $data['preguntas'] =$this->M_evaluacion->obtenerPreguntasExamenes($examen_id);
        $data['respuestaspregunta']  = array();
        foreach($data['preguntas'] as  $pregunta){
            $opcionesrespuesta = $this->M_evaluacion->obtenerRespuesta($pregunta->pregunta_id);
            $data['respuestaspregunta'] = array_merge($data['respuestaspregunta'] , $opcionesrespuesta);
        }

        $this->load->view('templates/header');
        $this->load->view('Alumno/Examen', $data);
		$this->load->view('templates/footer');
       
    }

    public function registraRespuesta($id_pregunta)
	{
		//print_r($this->input->post());
		
		if($this->input->post()){
			$res = $this->input->post('outer-group');
			$this->M_evaluacion->updatePregunta($id_respuestas_usuarios,$res [0]['texto_p']);
			$this->M_evaluacion->borrarRespuesta($id_pregunta);
			
			foreach($res[0]['inner-group'] as $id_respuestas_usuarios)
				{
					$this->Guardarrespuesta($id_pregunta, $respuestas);
				}
			
		}
		$this->preguntas();
	}

   
}