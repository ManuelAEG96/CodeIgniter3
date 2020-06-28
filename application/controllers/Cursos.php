<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('NewController_model');
    }

    function index()
    {
        $datos['segmento'] = $this->uri->segment(3);
        $this->load->view('Cursos/headers');
        if (!$datos['segmento']) {
            $datos['cursos'] = $this->NewController_model->obtenerCursos();    
        }
        else {
            $datos['cursos'] = $this->NewController_model->obtenerCurso($datos['segmento']);
        }
        $this->load->view('Cursos/index', $datos);
    }

    function nuevo()
    {
        $this->load->view('Cursos/headers');
        $this->load->view('Cursos/formulario');
    }

    function recibirDatos()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'videos' => $this->input->post('videos')
        );
        $this->NewController_model->crearCurso($datos);
        $this->load->view('Cursos/headers');
		$this->load->view('Cursos/bienvenido');
    }

    function editar()
    {
        // $idCurso = $this->uri->segment(3);
        // $datos['curso'] = $this->NewController_model->obtenerCurso($idCurso);
        $datos['id'] = $this->uri->segment(3);
        $datos['curso'] = $this->NewController_model->obtenerCurso($datos['id']);
        $this->load->view('Cursos/headers');
        $this->load->view('Cursos/editar', $datos);
    }

    function eliminar()
    {
        $id = $this->uri->segment(3);
        $this->NewController_model->eliminarCurso($id);
    }

    function actualizar()
    {
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'videos' => $this->input->post('videos')
        );
        $this->NewController_model->actualizarCurso($this->uri->segment(3),$datos);
        // $this->load->view('Cursos/headers');
        // $this->load->view('Cursos/bienvenido');
        redirect(base_url());
    }
}