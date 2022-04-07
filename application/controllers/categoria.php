<?php

class Categoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
    } 

    function add()
    {
        $data["view"]="categoria/add";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre','nombre','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
            );
            $this->Categoria_model->add($params);
            redirect('/');
        }

        $this->load->view("layouts/main",$data);
    }
    function edit()
    {
        $data["view"]="categoria/edit";
        $this->load->view("layouts/main",$data);
    }
    function remove()
    {
        $data["view"]="categoria/add";
        $this->load->view("layouts/main",$data);
    }
    function list()
    {
        $data["view"]="categoria/list";
        $this->load->view("layouts/main",$data);
    }


}