<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function registrarUsuario($datos)
    {
        if($this->db->insert('user', $datos))
        {
            return true;
        }
        else {
            return false;
        }
    }

    function emailValidation($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
}