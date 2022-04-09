<?php
class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function add($params)
    {
        $this->db->insert('categoria',$params);
        return $this->db->insert_id();
    }
    function edit($id,$params)
    {
        $this->db->where('idcategoria',$id);
        return $this->db->update('categoria',$params);
    }
    function remove()
    {

    }
    function get($id)
    {
        return $this->db->query("select * from categoria c where c.idcategoria = $id;")->row_array();
    }
    function list()
    {
        $this->db->order_by('nombre', 'asc');
        return $this->db->get('categoria')->result_array();
    }

}