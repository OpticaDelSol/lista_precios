<?php

class Producto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
    } 

    function add()
    {
        $data["marcas"]=[];
        $data["subcategorias"]=[];
        $data["categorias"]=[];
        $data["view"]="producto/add";

        $this->load->library('form_validation');

        $this->form_validation->set_rules('precio','precio','required');
        if($this->form_validation->run())     
        {   
            $params = array();
            $this->Producto_model->add($params);
            redirect('/');
        }
       
        $this->load->view("layouts/main",$data);
    }
    function edit()
    {
        $data["view"]="producto/edit";
        $this->load->view("layouts/main",$data);
    }
    function remove()
    {

    }
    function list()
    {
        $data["view"]="producto/list";
        $this->load->view("layouts/main",$data);
    }


}