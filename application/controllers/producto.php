<?php

class Producto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->model('categoria_model');
        $this->load->model('subCategoria_model');
    } 

    function add()
    {
        $data["categorias"]=$this->categoria_model->list();
        $data["view"]="producto/add";
        $data["js_to_load"]=["add_producto.js"];

        $this->load->library('form_validation');

        $this->form_validation->set_rules('precio','precio','required');
        if($this->form_validation->run())     
        {   
            $params = array(
                'codigo' => $this->input->post('codigo'),
                'descripcion' => $this->input->post('descripcion'),
                'precio' => $this->input->post('precio'),
                'titulo' => $this->input->post('titulo'),
                'subcategoria_idsubcategoria' => $this->input->post('subcategoria'),
            );
            $this->Producto_model->add($params);
            redirect('/');
        }
       
        $this->load->view("layouts/main",$data);
    }

    function get_subcategoria_by_categoria($idcategoria)
    {
        $data['subcategorias']=$this->subCategoria_model->list_for_category($idcategoria);
        $this->load->view("producto/_subcategoria_select",$data);
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