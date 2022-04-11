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
        $this->form_validation->set_rules('descripcion','descripcion','required');
        $this->form_validation->set_rules('codigo','codigo','required');
        $this->form_validation->set_rules('titulo','titulo','required');
        $this->form_validation->set_rules('subcategoria','subcategoria','required');
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
            redirect('producto/list');
        }else{
            //$data["error"]="todos los campos son requeridos";
        }
       
        $this->load->view("layouts/main",$data);
    }

    function get_subcategoria_by_categoria($idcategoria)
    {
        $data['subcategorias']=$this->subCategoria_model->list_for_category($idcategoria);
        $this->load->view("producto/_subcategoria_select",$data);
    }

    function obtener_detalles_producto($idproducto)
    {
        $data["detalle"]=$this->Producto_model->get_detalle_producto($idproducto);
        $this->load->view("producto/_product_details_modal",$data);
    }

    function edit($idproducto)
    {
        $data["producto"]=$this->Producto_model->get($idproducto);
        $data["view"]="producto/edit";
        $data["js_to_load"]=["edit_producto.js"];
        $data["idproducto"]=$idproducto;

        $this->load->library('form_validation');

        $this->form_validation->set_rules('precio','precio','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');
        $this->form_validation->set_rules('codigo','codigo','required');
        $this->form_validation->set_rules('titulo','titulo','required');
        //$this->form_validation->set_rules('subcategoria','subcategoria','required');

        if($this->form_validation->run())     
        {   
            $activo = "0";
            if(isset($_POST['activo']))
            {
                $activo = ($_POST['activo']=="activo") ? "1":"0";
            }
            $params = array(
                'codigo' => $this->input->post('codigo'),
                'descripcion' => $this->input->post('descripcion'),
                'precio' => $this->input->post('precio'),
                'titulo' => $this->input->post('titulo'),
                'activo' => $activo,
            );
            $this->Producto_model->update($idproducto,$params);
            redirect('producto/list');
        }else{
            //$data["error"]="todos los campos son requeridos";
        }

        $this->load->view("layouts/main",$data);
    }
    function remove()
    {

    }
    function list()
    {
        $data["productos"]=$this->Producto_model->list_path();
        $data["view"]="producto/list";

        

        

        $this->load->view("layouts/main",$data);
    }


}