<?php

class Inicio extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    } 

    function index()
    {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('_password','_password','max_length[64]|required');
	    $this->form_validation->set_rules('_usuario','_usuario','max_length[64]|required');
        
        if($this->form_validation->run())     
        {
            $usuario = $this->Usuario_model->validate_usuario($this->input->post('_usuario'),$this->input->post('_password'));
            if(isset($usuario['idusuario']))
            {
                $newdata = array( 
                    'id_usuario' => $usuario['id'],
                    'user_name'  => $this->input->post('_usuario'),
                    'logged_in' => TRUE,
                    'privileges' => $usuario['permisos'],
                    'details' => $usuario['nombre']
                 );  

                 $this->session->set_userdata($newdata);
                
                redirect('dashboard/listado_cat');
            }
            /*else
            {
                $data['_message'] = 'Error de validacion';
                $data['_view'] = 'acceso/index';
                $this->load->view('layouts/login',$data);
            }*/
        }



        $this->load->view("login/login");
    }

    function  logout()
    {
        $this->session->unset_userdata('user_name');
        redirect('inicio/');
    }

    function auth()
    {

    }

}