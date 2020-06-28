<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autos_model extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function crearAuto($datos)
    {
        $this->db->insert('auto', array('nombre' => $datos['nombre'], 'marca' => $datos['marca'], 'modelo' => $datos['modelo'], 'tipo' => $datos['tipo']));
    }

    function obtenerAutos()
    {
        $query = $this->db->get('auto');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerAuto($id)
    {
        $this->db->where('autoID',$id);
        $query = $this->db->get('auto');
        // $query = $this->db->get_where('auto',array('autoID' => $id));
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function actualizarAuto($id, $data)
    {
        $datos = array(
            'nombre' => $data['nombre'], 
            'marca' => $data['marca'],
            'modelo' => $data['modelo'],
            'tipo' => $data['modelo']
        );
        $this->db->where('autoID',$id);
        $query = $this->db->update('auto', $datos);
    }

    function eliminarAuto($id)
    {
        // $query = "DELETE FROM curso WHERE autoID = $id";
        // $this->db->query($query);
        $this->db->delete('auto', array('autoID' => $id));
    }
}

?>
