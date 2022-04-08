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
        $this->db->where('id',$id);
        return $this->db->update('producto',$params);
    }
    function remove()
    {

    }
    function list()
    {
        return $this->db->query("")->result_array();
    }
    function get_detalle_producto($id)
    {
        return $this->db->query("select p.titulo, p.descripcion from producto p where p.idproducto=$id;")->row_array();
    }
    function list_por_categoria()
    {
        return $this->db->query("select sc.categoria_idcategoria, p.subcategoria_idsubcategoria, p.*, sc.nombre as 'nombre_subcategoria', sc.descripcion from producto p, subcategoria sc where sc.idsubcategoria = p.subcategoria_idsubcategoria  order by sc.categoria_idcategoria, p.subcategoria_idsubcategoria;")->result_array();
    }

}