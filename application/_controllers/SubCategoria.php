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

    function modify_price_p(){
        $this->load->model('Producto_model');
        $this->load->library('form_validation');
        $this->load->helper('math');
        $data["js_to_load"]=["modif_precio_grupo.js"];
        $data["rows"]=$this->Categoria_model->list();
        $data["view"]="subcategoria/modif_price_p";
        
        //form
        $this->form_validation->set_rules('porcentaje','porcentaje','required');

        if($this->form_validation->run())
        {

            /*
                steps:
                1.get product list
                2.save log
                3.save product
            */
            $idscat = $this->input->post("subcategoria");

            $idref = $this->SubCategoria_model->registrar_cambio_porcentaje($idscat,$this->input->post("porcentaje"));

            $products = $this->Producto_model->listado_por_subcategoria($idscat);
            foreach($products as $product)
            {
                $n_precio= calcular_precio($product["precio"],$this->input->post("porcentaje"));
                
                //register change log
                $this->Producto_model->registrar_cambio_precio(
                    $product["idproducto"],
                    $product["precio"],
                    $n_precio,
                    $idref
                );

                $params=[
                    "precio"=> $n_precio
                ];
                
                //save product
                $this->Producto_model->update(
                    $product["idproducto"],$params
                );
            }

            redirect('producto/list');
        }
        
        $this->load->view("layouts/main",$data);
    }

    function modify_price(){
        #$data["js_to_load"]=["modif_precio_grupo.js"];
        $data["rows"]=$this->Categoria_model->list();
        $data["view"]="subcategoria/modif_price";
        $this->load->view("layouts/main",$data);
    }

    function getforcatid($id){
        $data["rows"]=$this->SubCategoria_model->list_for_category($id);
        $this->load->view("subcategoria/_select_subgrupo",$data);
    }

}