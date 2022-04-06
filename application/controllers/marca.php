<?php

class Marca extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Marca_model');
    } 

    function add()
    {
        $data["view"]="marca/add";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre','nombre','required');
        if($this->form_validation->run())     
        {   
            $params = array();
            $this->Marca_model->add($params);
            redirect('/');
        }

        $this->load->view("layouts/main",$data);
    }
    function edit()
    {
        $data["view"]="marca/add";
        $this->load->view("layouts/main",$data);
    }
    function remove()
    {
        $data["view"]="marca/edit";
        $this->load->view("layouts/main",$data);
    }
    function list()
    {
        $data["view"]="marca/list";
        $this->load->view("layouts/main",$data);
    }


}