

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_evaluacion extends CI_Model{

    function __construct()  
      {  
         parent::__construct();  
      } 

    public function obtenerExamenes(){
        $query = $this->db->get('examenes');
        return $query->result();
    }


    public function obtenerPreguntasExamenes($examen_id){
      return $this->db->select('*')
              ->from('examenpreguntas')
              ->join('preguntas', 'id_preguntas = pregunta_id')
              ->where('examen_id',$examen_id)
              ->get()
              ->result();
  }
  public function obtenerRespuesta($pregunta_id){
    return $this->db->select('*')
            ->from('opcionesrespuesta',)
            ->where('pregunta_id',$pregunta_id)
            ->get()
            ->result();
  }

  public function GuardarRespuesta($registro){
    $this->db->insert('respuestasusuarios', $registro);
  }

    public function getExamenId($id){
      return $this->db->select('*')
              ->from('respuesta_seleccionada_id')
              ->where('id_respuestas_usuarios',$id)
              ->get()
              ->row();
      }
}
?>
