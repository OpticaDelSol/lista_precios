<?php
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function validate_usuario($user,$password)
    {
        return $this->db->get_where('usuario',array('nombre'=>$user,'password'=>$password))->row_array();
    }
    /*
     * Get usuario by id
     */
    function get_usuario($id)
    {
        return $this->db->get_where('usuario',array('idusuario'=>$id))->row_array();
    }

}
