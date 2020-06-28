<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Autos_model');
    }

    function index()
    {
        $datos['segmento'] = $this->uri->segment(3);
        $datos['headers'] = $this->load->view('headers','',TRUE);
        if (!$datos['segmento']) {
            $datos['autos'] = $this->Autos_model->obtenerAutos();    
        }
        else {
            $datos['autos'] = $this->Autos_model->obtenerAuto($datos['segmento']);
        }
        $this->load->view('Autos/index', $datos);
        $this->load->view('footer');
    }

    function nuevo()
    {
        $this->load->view('headers');
        $this->load->view('Autos/formulario');
        $this->load->view('footer');
    }

    function recibirDatos()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'marca' => $this->input->post('marca'),
            'modelo' => $this->input->post('modelo'),
            'tipo' => $this->input->post('tipo')
        );
        $this->Autos_model->crearAuto($datos);
        $this->load->view('headers');
        $this->load->view('Autos/bienvenido');
        $this->load->view('footer');
    }

    function editar()
    {
        $datos['id'] = $this->uri->segment(3);
        $datos['auto'] = $this->Autos_model->obtenerAuto($datos['id']);
        $this->load->view('headers');
        $this->load->view('Autos/editar', $datos);
        $this->load->view('footer');
    }

    function eliminar()
    {
        $id = $this->uri->segment(3);
        $this->Autos_model->eliminarAuto($id);
    }

    function actualizar()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'marca' => $this->input->post('marca'),
            'modelo' => $this->input->post('modelo'),
            'tipo' => $this->input->post('tipo')
        );
        $this->Autos_model->actualizarAuto($this->uri->segment(3),$datos);
        redirect(base_url());
    }

}

?>