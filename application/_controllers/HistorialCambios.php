<?php
class HistorialCambios  extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('HistorialCambios_model');
        $this->load->model('Producto_model');
    }

    function list()
    {

    }

    function list_prod($idprod)
    {
        $data["cambios"] = $this->HistorialCambios_model->list_prod($idprod);
        $data["producto"] = $this->Producto_model->get($idprod);
        $data["view"] = "historial/prod";
        $this->load->view("layouts/main",$data);

    }
}