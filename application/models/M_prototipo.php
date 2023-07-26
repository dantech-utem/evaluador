<?php
class M_prototipo extends CI_Model{

    public function guardarpregunta($datos){
		$this->db->insert("preguntas",$datos);
	}

    public function guardarrespuesta($datos){
		$this->db->insert("opcionesrespuesta",$datos);
	}

}
?>