<?php

class Empresa extends CI_Model
{
    
    function get_company(){
        return $this->db->get('empresa');    
    }
    
      function get_data_company($email)
    {
      $this->db->select('*');
      $this->db->from('empresa');
      $this->db->where('email_empresa', $email);
      return $this->db->get();
    }
   
    function add_new_company($data){
    	$this->db->insert('empresa',$data);
        
    }
    
    function modify_company($id_empresa, $newdata){
        
    }
}