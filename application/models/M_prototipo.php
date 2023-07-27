<?php
class M_prototipo extends CI_Model{

	public function getPreguntas() {
		return $this->db->select('*')
		->from('preguntas')
		->get()
		->result();
	}

	public function getPregunta($id) {
		return $this->db->select('*')
						->from('preguntas')
						->where('id',$id)
						->get()
						->row();
	}

	
	public function getRespuestas($pregunta_id) {
		return $this->db->select('*')
		->from('opcionesrespuesta')
		->where('pregunta_id',$pregunta_id)
		->get()
		->result();
	}

    public function guardarpregunta($datos){
		$this->db->insert("preguntas",$datos);
	}

    public function guardarrespuesta($datos){
		$this->db->insert("opcionesrespuesta",$datos);
	}

	public function updatePreguntas($datos,$pregunta_id){
		$this->db->where('pregunta_id',$pregunta_id)
				 ->update('v_preguntas', $datos);
	}


}
?>