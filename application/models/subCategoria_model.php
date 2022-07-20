<?php
class SubCategoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function add($params)
    {
        $this->db->insert('subcategoria',$params);
        return $this->db->insert_id();
        
    }
    function edit($id,$params)
    {
        $this->db->where('idsubcategoria',$id);
        return $this->db->update('subcategoria',$params);
    }
    function remove()
    {

    }
    
    function get($id)
    {
        return $this->db->query("select * from subcategoria sc where sc.idsubcategoria = $id;")->row_array();
    }

    function list_path()
    {
        return $this->db->query("select c.nombre as 'nombre_categoria', sc.* from categoria c, subcategoria sc where sc.categoria_idcategoria = c.idcategoria;")->result_array();
    }

    function list()
    {
        $this->db->order_by('nombre', 'asc');
        return $this->db->get('subcategoria')->result_array();
    }
    function list_for_category($id)
    {
        $this->db->where('categoria_idcategoria', $id);
        return $this->db->get('subcategoria')->result_array();
    }

    function registrar_cambio_porcentaje($idsc,$porcentaje)
    {
        $this->db->query("INSERT INTO `modificacion` (`fk_subcat`, `porcentaje`, `tipo`) VALUES ($idsc, $porcentaje,'SCAT');");
        return $this->db->insert_id();
    }

}