<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_preguntas extends CI_Model{

    function __construct()  
      {  
         parent::__construct();  
      } 

    public function obtenerPreguntas(){
        $query = $this->db->get('preguntas');
        return $query->result();
    }
}
?>