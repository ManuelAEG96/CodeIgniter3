<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duenos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Duenos_model');
    }

    function index()
    {
        $datos['segmento'] = $this->uri->segment(3);
        $datos['headers'] = $this->load->view('headers','',TRUE);
        if (!$datos['segmento']) {
            $datos['duenos'] = $this->Duenos_model->obtenerDuenos();    
        }
        else {
            $datos['duenos'] = $this->Duenos_model->obtenerDueno($datos['segmento']);
        }
        $this->load->view('Duenos/index', $datos);
        $this->load->view('footer');
    }

    function nuevo()
    {
        $this->load->view('headers');
        $this->load->view('Duenos/formulario');
        $this->load->view('footer');
    }

    function recibirDatos()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'apellidoP' => $this->input->post('apellidoP'),
            'apellidoM' => $this->input->post('apellidoM'),
            'domicilio' => $this->input->post('domicilio'),
            'fechaNac' => $this->input->post('fechaNac'),
            'genero' => $this->input->post('genero'),
            'edad' => $this->input->post('edad'),
            'edoCiv' => $this->input->post('edoCiv')
        );
        $this->Duenos_model->crearDueno($datos);
        $this->load->view('headers');
        $this->load->view('Duenos/bienvenido');
        $this->load->view('footer');
    }

    function editar()
    {
        $datos['id'] = $this->uri->segment(3);
        $datos['dueno'] = $this->Duenos_model->obtenerDueno($datos['id']);
        $this->load->view('headers');
        $this->load->view('Duenos/editar', $datos);
        $this->load->view('footer');
    }

    function eliminar()
    {
        $id = $this->uri->segment(3);
        $this->Duenos_model->eliminarDueno($id);
    }

    function actualizar()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'apellidoP' => $this->input->post('apellidoP'),
            'apellidoM' => $this->input->post('apellidoM'),
            'domicilio' => $this->input->post('domicilio'),
            'fechaNac' => $this->input->post('fechaNac'),
            'genero' => $this->input->post('genero'),
            'edad' => $this->input->post('edad'),
            'edoCiv' => $this->input->post('edoCiv')
        );
        $this->Duenos_model->actualizarDueno($this->uri->segment(3),$datos);
        redirect(base_url());
    }

}

?>