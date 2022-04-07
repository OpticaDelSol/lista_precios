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
    function update($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('sbcategoria',$params);
    }
    function remove()
    {

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

}