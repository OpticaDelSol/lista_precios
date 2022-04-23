<?php
class HistorialCambios_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function list_prod($idprod)
    {
        return $this->db->query("select date_format(m.fecha_modif, '%d / %m / %Y') as 'fecha', m.* from modificacion m where m.fk_producto = $idprod order by m.fecha_modif desc;")->result_array();
    }

}