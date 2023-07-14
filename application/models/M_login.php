<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function obtenerUsuario($correo, $contraseña) {
        $this->db->where('correo_electronico', $correo);
        $this->db->where('contraseña', $contraseña);
        
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}
?>