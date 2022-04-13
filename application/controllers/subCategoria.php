<?php

class SubCategoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SubCategoria_model');
        $this->load->model('Categoria_model');
    } 

    function add()
    {
        $data["view"]="subcategoria/add";
        $data["categorias"]=$this->Categoria_model->list();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre','nombre','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
                'categoria_idcategoria'=>$this->input->post('categoria'),
            );
            $this->SubCategoria_model->add($params);
            redirect('subCategoria/list');
        }else{
            //$data["error"]="todos los campos son requeridos";
        }

        $this->load->view("layouts/main",$data);
    }

    function edit($idsubcategoria)
    {
        $data["view"]="subcategoria/edit";
        $data["idsubcategoria"]=$idsubcategoria;
        $data["subcategoria"] = $this->SubCategoria_model->get($idsubcategoria);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre','nombre','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
            );
            $this->SubCategoria_model->edit($idsubcategoria, $params);
            redirect('subCategoria/list');
        }
        else{
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
        $data["subcategorias"]=$this->SubCategoria_model->list_path();
        $data["view"]="subcategoria/list";
        $this->load->view("layouts/main",$data);
    }


}