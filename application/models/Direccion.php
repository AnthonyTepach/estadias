<?php

class Direccion extends CI_Model
{
    
    function get_estado(){

        return $this->db->get('estados');    
    }
    function get_municipio(){
    	$this->db->order_by("nombre", "asc");
    	return $this->db->get('municipios');
    }
    
    
}