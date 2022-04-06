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

}