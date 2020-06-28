<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        // $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Users_model');
        //$this->load->model('Autos_model');
    }

    function login()
    {
        $this->load->view('headers');
        $this->load->view('Users/login');
        $this->load->view('footer');
    }

    function register()
    {
        $this->load->view('headers');
        $this->load->view('Users/register');
        $this->load->view('footer');
    }

    function registrar()
    {
        // print_r($this->input->post());
        if ($this->input->post()) {

            if ($this->input->post('password') != $this->input->post('password2')) {
                echo json_encode(array('error' => true, 'mensaje' => 'Las contraseñas no coinciden.'));
                exit();
            }
            // $emailDB = $this->Users_model->emailValidation($this->input->post('email'));
            // print_r($this->input->post('email'));
            // echo json_encode($emailDB->result()[0]->email);
            // if ($this->input->post('email') == $emailDB->result()[0]->email) {
            if ($this->Users_model->emailValidation($this->input->post('email'))) {
                $valEmail = '|is_unique[user.email]';
            }
            else {
                $valEmail = '';
            }
            $mensajes = array(
                'is_required' => 'El %s es obligatorio.',
                'min_length' => 'El tamaño mínimo de %s es de 4 caracteres.',
                'max_length' => 'El tamaño máximo de %s es de 60 caracteres.',
                'is_unique' => 'Este %s ya existe.',
                'valid_email' => 'El %s no es válido'
            );
            $contra = array(
                'is_required' => 'El %s es obligatorio.',
                'min_length' => 'El tamaño mínimo de %s es de 8 caracteres.',
                'max_length' => 'El tamaño máximo de %s es de 60 caracteres.',
            );

            $this->form_validation->set_rules('fname','First Name','required|min_length[4]|max_length[60]', $mensajes);
            $this->form_validation->set_rules('lname','Last Name','required|min_length[4]|max_length[60]', $mensajes);
            $this->form_validation->set_rules('email','E-mail','required|valid_email'.$valEmail, $mensajes);
            $this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[60]', $contra);

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
                exit();
            }
            else {
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                unset($_POST['password2']);
                unset($_POST['terms']);
                // print_r($this->input->post());
                if($this->Users_model->registrarUsuario($this->input->post()))
                {
                    echo json_encode(array('error' => false, 'mensaje' => 'El usuario fue registrado.'));
                }
                else 
                {
                    echo json_encode(array('error' => true, 'mensaje' => 'Error al registrar el usuario. Intente más tarde.'));
                }
            }
        }
    }

    function datosPersonales()
    {
        $vw_data["action_form"] = base_url()."Users/regPeronData";
		$vw_data["btnGuardarText"] = "Guardar datos";
        $this->load->view('headers');
        $this->load->view('Users/personalData', $vw_data);
        $this->load->view('footer');
    }

    function regPeronData()
    {
        $post = $this->input->post();
        var_dump($post);
        die();
    }

}