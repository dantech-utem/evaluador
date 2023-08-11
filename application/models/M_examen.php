<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_examen extends CI_Model{

    function __construct()  
      {  
         parent::__construct();  
      } 

    public function obtenerExamenes(){
        $query = $this->db->get('examenes');
        return $query->result();
    }

    public function obtenerPreguntasExamenes($examen_id) {
      // Obtener preguntas asociadas al examen desde la tabla pivote
      $this->db->where('examen_id', $examen_id);
      return $this->db->get('examenpreguntas')->result();
    }


  public function updateExamen($examen_id){
    $titulo = $this->input->post('examen');
    $preguntas_seleccionadas = array_keys($this->input->post('preguntas'));

    $config['upload_path'] = './assets/images/examenes';
    // Resto del código de configuración del upload...

    if ($this->upload->do_upload('imagen_examen')) {
        // El archivo se cargó correctamente
        $upload_data = $this->upload->data();
        $imagen_examen = $upload_data['file_name'];
        $this->M_examen->updateImgExamen($id, $imagen_examen);
    }

    $data = array(
        'titulo' => $titulo,
        'imagen_examen' => $imagen_examen
    );
    $this->db->where('id_examenes', $id);
    $this->db->update('examenes', $data);

    // Obtener las preguntas actuales asociadas al examen
    $preguntas_examenes_actuales = $this->M_examen->obtenerPreguntasExamenes($id);

    foreach ($preguntas_examenes_actuales as $pregunta_actual) {
        $pregunta_id = $pregunta_actual->pregunta_id;
        $estatus = in_array($pregunta_id, $preguntas_seleccionadas) ? 1 : 0;
        $this->M_examen->asociar_pregunta($id, $pregunta_id, $estatus);
    }

    redirect('Admin/C_admin/editExamen/'.$id);
}
  
  //public function borrarPreguntasExamenes($examen_id){
  //    $this->db->where('examen_id', $examen_id);
  //    $this->db->delete('examenpreguntas');
  //}

  //public function insertarPreguntasExamenes($registro){
  //    $this->db->insert('examenpreguntas', $registro);
  //}

  public function linkPreguntas($examen_id){
    $preguntas = $this->db->get('preguntas')->result_array();

    foreach ($preguntas as $pregunta){
      $datos = array(
        'examen_id' => $examen_id,
        'pregunta_id' => $pregunta['id_preguntas'],
        'status' => 0
      );
      $this->db->insert('examenpreguntas', $datos);
    }
  }

  public function asociar_pregunta($examen_id, $pregunta_id, $estatus) {
    // Verificar si ya existe una entrada para esta combinación de examen y pregunta
    $this->db->where('examen_id', $examen_id);
    $this->db->where('pregunta_id', $pregunta_id);
    $query = $this->db->get('examenpreguntas');

    if ($query->num_rows() > 0) {
        // Actualizar el estado de la pregunta existente en la tabla pivote
        $this->db->where('examen_id', $examen_id);
        $this->db->where('pregunta_id', $pregunta_id);
        $this->db->update('examenpreguntas', array('status' => $estatus));
    } else {
        // Insertar una nueva entrada en la tabla pivote
        $data = array(
            'examen_id' => $examen_id,
            'pregunta_id' => $pregunta_id,
            'status' => $estatus
        );
        $this->db->insert('examenpreguntas', $data);
    }
}

  public function updateImgExamen($id_examenes, $imagen_examen){
      $data = array(
        "imagen_examen" => $imagen_examen
      );

      $this->db->where('id_examenes', $id_examenes);
      $this->db->update('examenes', $data);
  }

  public function guardarExamen($titulo, $imagen_examen){
    $data = array(
			'titulo' => $titulo,
      'imagen_examen' => $imagen_examen

    	);
    	$this->db->insert('examenes', $data);
		if( $this->db->affected_rows() > 0 ) {
			$examen_id = $this->db->insert_id();

		}
  }

    public function actualizar_estatus($id_examenes, $estatus) {
      $this->db->set('estatus',$estatus);
		  $this->db->where('id_examenes', $id_examenes);
		  $this->db->update('examenes');
    }
  

    public function getExamenId($id){
      return $this->db->select('*')
              ->from('examenes')
              ->where('id_examenes',$id)
              ->get()
              ->row();
    }

    public function obtenerCalificacion($id){
        return $this->db->select('*')
        ->from('vista_califinal')
        ->where('id_usuarios',$id)

        ->get()
        ->result();
    }
    public function obtener_examenes_usuario($usuario_id) {
      $this->db->select('*');
      $this->db->from('usuariosexamen'); // Asegúrate de que estás consultando la tabla de asignaciones
      $this->db->join('examenes', 'usuariosexamen.examen_id = id_examenes');
      $this->db->where('usuariosexamen.usuario_id', $usuario_id);
      $query = $this->db->get();
      return $query->result();
  }
}
?>