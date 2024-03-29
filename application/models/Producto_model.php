<?php
class Producto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function add($params)
    {
        $this->db->insert('producto',$params);
        return $this->db->insert_id();
        
    }
    function update($id,$params)
    {
        $this->db->where('idproducto',$id);
        return $this->db->update('producto',$params);
    }
    function remove()
    {

    }
    function list()
    {
        return $this->db->query("")->result_array();
    }

    function list_path()
    {
        return $this->db->query("select concat( c.nombre , ' / ', sc.nombre) as 'path', p.* from producto p, categoria c, subcategoria sc where sc.categoria_idcategoria = c.idcategoria and p.subcategoria_idsubcategoria = sc.idsubcategoria;")->result_array();
    }

    function get_detalle_producto($id)
    {
        return $this->db->query("select p.codigo, p.titulo, p.descripcion from producto p where p.idproducto=$id;")->row_array();
    }
    function list_por_categoria($filtro)
    {
        $_filtro = (!isset($filtro) || $filtro=="")? "" : " and p.codigo like '%$filtro%' "; 
  
        return $this->db->query("select sc.categoria_idcategoria, p.subcategoria_idsubcategoria, p.*, sc.nombre as 'nombre_subcategoria', sc.descripcion from producto p, subcategoria sc where sc.idsubcategoria = p.subcategoria_idsubcategoria $_filtro and p.activo=1 order by sc.categoria_idcategoria, p.subcategoria_idsubcategoria;")->result_array();
    }

    function get($idproducto)
    {
        return $this->db->query("select * from producto p where p.idproducto=$idproducto;")->row_array();
    }

    function obtener_ultima_modif()
    {
        return $this->db->query("select date_format(p.fecha_modif,'%d/%m/%Y') as 'ultima_modif' from producto p order by p.fecha_modif desc limit 1;")->row_array();
    }

    

    function registrar_cambio_precio($idproducto,$precio_ant, $precio_nuevo,$idref=null)
    {
        $this->db->query("INSERT INTO `modificacion` (`fk_producto`, `valor_anterior`, `valor_nuevo`, `refid`) VALUES ($idproducto, $precio_ant, $precio_nuevo, '$idref');");
    }

    function listado_por_subcategoria($idscat){
        return $this->db->query("select * from producto p where p.subcategoria_idsubcategoria=$idscat;")->result_array();
    }

}