<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('headers');
        $this->load->view('Solicitud/index');
        $this->load->view('footer');
    }

    public function solPOST()
    {

        $datos['title'] = 'Transaccion exitosa';
		$datos['body'] = 'Esto es una función para realizar un POST en una API externa.';
        $datos['userId'] = 1;
        
        $service_url = 'https://jsonplaceholder.typicode.com/posts';
        $params = array(
			'http' => array(
				'method' => 'POST',
				'content' => http_build_query($datos)
			)
		);
		$ctx = stream_context_create($params);
		$fp = @fopen($service_url, 'rb', false, $ctx);
		if ($fp)
		{
			echo @stream_get_contents($fp);
			die();
		}
		else
		{
			// Error
			throw new Exception("Error al cargar '$service_url'");
		}
    }

    function encriptador()
    {
        $this->load->view('Solicitud/encriptador');
    }

    function encriptarMensajes()
    {
        $this->load->helper('helper_encrypt');
        $clave  = 'w5_pag05.1rapuat2345';
        $method = 'aes-128-cbc';
        $ivB64 = "btVTfXGPDz9pZWcYL/0jJw==";
        $mensaje = $this->input->post('mensaje');
        $iv = base64_decode($ivB64);
        $result = encriptar($mensaje, $method, $clave, $iv);
        echo json_encode(array('error' => false, 'mensaje' => $result));
        // echo $result;
    }

    function desencriptarMensajes()
    {
        $this->load->helper('helper_encrypt');
        $clave  = 'w5_pag05.1rapuat2345';
        $method = 'aes-128-cbc';
        $ivB64 = "btVTfXGPDz9pZWcYL/0jJw==";
        $mensaje = $this->input->post('mensaje2');
        $iv = base64_decode($ivB64);
        $result = desencriptar($mensaje, $method, $clave, $iv);
        echo json_encode(array('error' => false, 'mensaje' => $result));
        // echo $result;
    }

}