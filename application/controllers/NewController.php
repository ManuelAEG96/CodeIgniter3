<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('NewController_model');
    }
	
	public function index()
	{
        $this->load->library('menu', array('Inicio','Nosotros','Servicios','Acerca de', 'Contacto'));
        $datos['menu1'] = $this->menu->construirMenu();
        $this->load->view('NewController/headers');
		$this->load->view('NewController/bienvenido', $datos);
    }
    
    public function holaMundo()
	{
        $this->load->view('NewController/headers');
		$this->load->view('NewController/bienvenido');
    }

}
