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
            redirect('categoria/list');
        }else{
            //$data["error"]="todos los campos son requeridos";
        }

        $this->load->view("layouts/main",$data);
    }
    function edit($idcategoria)
    {
        $this->load->library('form_validation');
        $data["categoria"] = $this->Categoria_model->get($idcategoria);

        $data["idcategoria"]=$idcategoria;
        $data["view"]="categoria/edit";

        $this->form_validation->set_rules('nombre','nombre','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
            );
            $this->Categoria_model->edit($idcategoria,$params);
            redirect('categoria/list');
        }else{
            //$data["error"]="todos los campos son requeridos";
        }



        $this->load->view("layouts/main",$data);
    }
    function remove()
    {
        $data["view"]="categoria/add";
        $this->load->view("layouts/main",$data);
    }
    function list()
    {
        $data["categorias"]=$this->Categoria_model->list();
        $data["view"]="categoria/list";
        $this->load->view("layouts/main",$data);
    }


}