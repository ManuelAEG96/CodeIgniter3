<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewController_model extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function crearCurso($datos)
    {
        $this->db->insert('curso', array('nombreCurso' => $datos['nombre'], 'videosCurso' => $datos['videos']));
    }

    function obtenerCursos()
    {
        $query = $this->db->get('curso');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerCurso($id)
    {
        $this->db->where('idCurso',$id);
        $query = $this->db->get('curso');
        // $query = $this->db->get_where('curso',array('idCurso' => $id));
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function actualizarCurso($id, $data)
    {
        $datos = array(
            'nombreCurso' => $data['nombre'], 
            'videosCurso' => $data['videos']
        );
        $this->db->where('idCurso',$id);
        $query = $this->db->update('curso', $datos);
    }

    function eliminarCurso($id)
    {
        // $query = "DELETE FROM curso WHERE idCurso = $id";
        // $this->db->query($query);
        $this->db->delete('curso', array('idCurso' => $id));
    }
}

?>
