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
    function update($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('categoria',$params);
    }
    function remove()
    {

    }
    function list()
    {
        $this->db->order_by('nombre', 'asc');
        return $this->db->get('categoria')->result_array();
    }

}