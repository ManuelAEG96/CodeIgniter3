<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Registros_model');
        $this->load->model('Autos_model');
        $this->load->model('Duenos_model');
    }

    public function index(){
        $this->load->view('headers');
        $this->load->view('Files/upload.php',array('error' => 'Listo pa subir a file.'));
        $this->load->view('footer');
    }

    function upload()
    {
        if($this->input->post('submit')){
            //Upload to the local server
            // echo $_FILES['myfile']['name'];
            $this->load->view('headers');
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('myfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('Files/upload.php', $error);
            }
            else
            {
                    $error = array('error' => $this->upload->data());

                    $this->load->view('Files/upload.php', $error);

                    //Get uploaded file information
                    $upload_data = $this->upload->data();
                    $fileName = $upload_data['file_name'];
                    
                    //File path at local server
                    $source = './uploads/'.$fileName;
                    
                    //Load codeigniter FTP class
                    $this->load->library('ftp');
                    
                    //FTP configuration
                    $config['hostname'] = 'localhost:21'; 
                    $config['username'] = 'Manuel96@localhost:21';
                    $config['password'] = '24823034';
                    $config['passive']  = TRUE;
                    $config['debug']    = TRUE;
                    
                    //Connect to the remote server
                    $this->ftp->connect($config);
                    
                    // //File upload path of remote server
                    // $destination = '/assets/'.$fileName;
                    
                    // //Upload file to the remote server
                    // $this->ftp->upload($source, ".".$destination, 'auto', 0777);
                    
                    //Close FTP connection
                    $this->ftp->close();
                    
                    //Delete file from local server
                    @unlink($source);
            }

            $this->load->view('footer');
        }
    }

}