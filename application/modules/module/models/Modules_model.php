<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Modules_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_Module($profile_id)
	{
			$query = $this->db->query("
				SELECT DISTINCT(Z.nombre_modulo), Z.id_modulo  FROM
				(SELECT A.*, B.nombre_menu, C.id_perfil FROM modulo A, menu B, menu_x_perfil C
				 WHERE A.id_modulo = B.id_modulo 
				 AND B.id_menu = C.id_menu
				 AND C.id_perfil = '$profile_id'
				) AS Z
			");
			return $query->result_array();
		
	}
	
	
}
