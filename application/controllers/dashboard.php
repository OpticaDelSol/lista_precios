<?php
class Dashboard  extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->model('Categoria_model');
        $this->load->model('SubCategoria_model');
    } 

 /*   function index()
    {
        $data['view']='dashboard/layout';
        $this->load->view('layouts/main',$data);
    }*/

    function listado_cat()
    {
        $filtro = isset($_GET["filtro"]) ? $_GET["filtro"] : "";
        //$_filtro = $filtro;

        if (preg_match('/^[A-Za-z0-9_-]*$/', $filtro)) {
            $_filtro = $filtro;
        }

        $data["categorias"]= $this->Categoria_model->list();
        $data["productos"]= $this->Producto_model->list_por_categoria($_filtro);

        $usedcat=[];

        foreach($data["productos"] as $p)
        {
            if(!array_key_exists($p["categoria_idcategoria"], $usedcat))
            {
                $usedcat[$p["categoria_idcategoria"]]=0;
            }
        }

        for($i=0;$i<count($data["categorias"]); $i++)
        {
            if(array_key_exists($data["categorias"][$i]["idcategoria"],$usedcat))
            {
                $data["categorias"][$i]["used"]="1";
            }
        }

        $data["ultima_modif"]=$this->Producto_model->obtener_ultima_modif();
        $data["view"]="dashboard/listado_por_categorias";

        if(isset($_GET["filtro"]))
        {
            $data["message"] = "Filtro: &nbsp;&nbsp; <b><i> $_filtro </i></b>";
        }
        
        $data["cur_cat_id"]="1";
        if(count($data["productos"])>0){
            $data["cur_cat_id"]=$data["productos"][0]["categoria_idcategoria"];
        }
       
        $data["js_to_load"]=["dashboard.js"];
        $this->load->view("layouts/main",$data);

    }

    function obtener_listado_categoria($idcategoria)
    {
        $data["idcateoria"]=$idcategoria;
    }
} 