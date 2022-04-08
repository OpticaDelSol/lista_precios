<?php
class Dashboard  extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->model('Categoria_model');
        $this->load->model('SubCategoria_model');
    } 

    function index()
    {
        $data['view']='dashboard/layout';
        $this->load->view('layouts/main',$data);
    }

    function listado_cat()
    {
        $data["categorias"]= $this->Categoria_model->list();
        $data["productos"]= $this->Producto_model->list_por_categoria();

        $data["view"]="dashboard/listado_por_categorias";
        $data["cur_cat_id"]="1";
        $data["js_to_load"]=["dashboard.js"];
        $this->load->view("layouts/main",$data);

    }

    function obtener_listado_categoria($idcategoria)
    {
        $data["idcateoria"]=$idcategoria;
    }
} 