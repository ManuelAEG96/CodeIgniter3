<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Registros_model');
        $this->load->model('Autos_model');
        $this->load->model('Duenos_model');
    }

    function index()
    {
        $datos['segmento'] = $this->uri->segment(3);
        $datos['headers'] = $this->load->view('headers','',TRUE);
        if (!$datos['segmento']) {
            $datos['registros'] = $this->Registros_model->obtenerRegistros2();    
        }
        else {
            $datos['registros'] = $this->Registros_model->obtenerRegistro2($datos['segmento']);
        }
        $this->load->view('Registros/index', $datos);
        $this->load->view('footer');
    }

    function nuevo()
    {
        $this->load->view('headers');
        $this->load->view('Registros/formulario');
        $this->load->view('footer');
    }

    function recibirDatos()
    {
        $datos = array(
            'autoID' => $this->input->post('autoID'),
            'duenoID' => $this->input->post('duenoID'),
            'uso' => $this->input->post('uso'),
            'placa' => $this->input->post('placa'),
            'numSerie' => $this->input->post('numSerie'),
            'robado' => $this->input->post('robado')
        );
        $this->Registros_model->crearRegistro($datos);
        $this->load->view('headers');
        $this->load->view('Registros/bienvenido');
        $this->load->view('footer');
    }

    function editar()
    {
        $datos['id'] = $this->uri->segment(3);
        $datos['registro'] = $this->Registros_model->obtenerRegistro($datos['id']);
        $datos['autos'] = $this->Autos_model->obtenerAutos();
        $datos['duenos'] = $this->Duenos_model->obtenerDuenos();
        $this->load->view('headers');
        $this->load->view('Registros/editar', $datos);
        $this->load->view('footer');
    }

    function eliminar()
    {
        $id = $this->uri->segment(3);
        $this->Registros_model->eliminarRegistro($id);
    }

    function actualizar()
    {
        $datos = array(
            'autoID' => $this->input->post('autoID'),
            'duenoID' => $this->input->post('duenoID'),
            'uso' => $this->input->post('uso'),
            'placa' => $this->input->post('placa'),
            'numSerie' => $this->input->post('numSerie'),
            'robado' => $this->input->post('robado')
        );
        $this->Registros_model->actualizarRegistro($this->uri->segment(3),$datos);
        redirect(base_url());
    }

}

?>