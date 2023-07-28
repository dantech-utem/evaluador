<?php
class M_agregarUsuarios extends CI_Model{

    public function obtenerUsuarios() {
        // Realiza la consulta para obtener los exámenes desde la base de datos
        $query = $this->db->get('usuarios');

        // Verifica si existen registros
        if ($query->num_rows() > 0) {
            // Si hay registros, convierte los resultados en un array
            return $query->result_array();
        } else {
            // Si no hay registros, devuelve un array vacío
            return array();
        }
    }

    public function asignarExamenesUsuario($id_usuarios, $examenes_seleccionados) {
        // Asociar los exámenes seleccionados al usuario en la tabla "usuarios_examenes"
        foreach ($examenes_seleccionados as $examen_id) {
            $data = array(
                'usuario_id' => $id_usuarios,
                'examen_id' => $examen_id
            );
            
            $this->db->insert('usuariosexamen', $data);
        }
    }

    public function actualizarEstadoUsuario($id_usuarios, $estado) {
        // Define el nuevo estado del usuario (1 para activado, 0 para desactivado)
        $nuevo_estado = ($estado == 'on') ? 0 : 1;

        // Actualiza el estado del usuario en la base de datos
        $data = array('estatus_usuario' => $nuevo_estado);
        $this->db->where('id_usuarios', $id_usuarios);
        $this->db->update('usuarios', $data);
    }

    

}
?>