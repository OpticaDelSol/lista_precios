<?php

class SubCategoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SubCategoria_model');
        $this->load->model('categoria_model');
    } 

    function add()
    {
        $data["view"]="subcategoria/add";
        $data["categorias"]=$this->categoria_model->list();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre','nombre','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
                'categoria_idcategoria'=>$this->input->post('categoria'),
            );
            $this->SubCategoria_model->add($params);
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