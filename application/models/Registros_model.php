<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function crearRegistro($datos)
    {
        $this->db->insert('duenoAuto', array(
        'autoID' => $datos['autoID'], 
        'duenoID' => $datos['duenoID'], 
        'uso' => $datos['uso'], 
        'placa' => $datos['placa'], 
        'numSerie' => $datos['numSerie'], 
        'robado' => $datos['robado']
        ));
    }

    function obtenerRegistros()
    {
        $query = $this->db->get('duenoAuto');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerRegistro($id)
    {
        $this->db->where('duenoautoID',$id);
        $query = $this->db->get('duenoAuto');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerRegistros2()
    {
        $query = $this->db->query('SELECT da.duenoautoID AS duenoautoID, a.nombre AS auto, a.marca AS marca, d.nombre AS nombre, d.apellidoP AS apellidoP, d.apellidoM AS apellidoM, da.uso AS uso, da.placa AS placa, da.numSerie AS numSerie, da.robado AS robado FROM auto a, dueno d, duenoauto da WHERE da.autoID = a.autoID AND da.duenoID = d.duenoID;');
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function obtenerRegistro2($id)
    {
        $query = $this->db->query('SELECT da.duenoautoID AS duenoautoID, a.nombre AS auto, a.marca AS marca, d.nombre AS nombre, d.apellidoP AS apellidoP, d.apellidoM AS apellidoM, da.uso AS uso, da.placa AS placa, da.numSerie AS numSerie, da.robado AS robado FROM auto a, dueno d, duenoauto da WHERE da.autoID = a.autoID AND da.duenoID = d.duenoID AND da.duenoautoID = '.$id.';');
        // $query = $this->db->get_where('dueno',array('duenoID' => $id));
        if ($query->num_rows() > 0) {
            return $query;
        }
        else {
            return false;
        }
    }

    function actualizarRegistro($id, $data)
    {
        $datos = array(
            'autoID' => $data['autoID'], 
            'duenoID' => $data['duenoID'], 
            'uso' => $data['uso'], 
            'placa' => $data['placa'], 
            'numSerie' => $data['numSerie'], 
            'robado' => $data['robado']
        );
        $this->db->where('duenoautoID',$id);
        $query = $this->db->update('duenoAuto', $datos);
    }

    function eliminarDueno($id)
    {
        // $query = "DELETE FROM curso WHERE duenoID = $id";
        // $this->db->query($query);
        $this->db->delete('duenoAuto', array('duenoautoID' => $id));
    }
}

?>
