<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duenos_model extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function crearDueno($datos)
    {
        $this->db->insert('dueno', array(
        'nombre' => $datos['nombre'], 
        'apellidoP' => $datos['apellidoP'], 
        'apellidoM' => $datos['apellidoM'], 
        'domicilio' => $datos['domicilio'], 
        'fechaNac' => $datos['fechaNac'], 
        'genero' => $datos['genero'], 
        'edad' => $datos['edad'], 
        'edoCiv' => $datos['edoCiv']
        ));
    }

    function obtenerDuenos()
    {
        $query = $this->db->get('dueno');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerDueno($id)
    {
        $this->db->where('duenoID',$id);
        $query = $this->db->get('dueno');
        // $query = $this->db->get_where('dueno',array('duenoID' => $id));
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function actualizarDueno($id, $data)
    {
        $datos = array(
            'nombre' => $data['nombre'], 
            'apellidoP' => $data['apellidoP'], 
            'apellidoM' => $data['apellidoM'], 
            'domicilio' => $data['domicilio'], 
            'fechaNac' => $data['fechaNac'], 
            'genero' => $data['genero'], 
            'edad' => $data['edad'], 
            'edoCiv' => $data['edoCiv']
        );
        $this->db->where('duenoID',$id);
        $query = $this->db->update('dueno', $datos);
    }

    function eliminarDueno($id)
    {
        // $query = "DELETE FROM curso WHERE duenoID = $id";
        // $this->db->query($query);
        $this->db->delete('dueno', array('duenoID' => $id));
    }
}

?>
