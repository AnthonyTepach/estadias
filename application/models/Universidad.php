<?php

class Universidad extends CI_Model
{
    
    function get_university(){
        return $this->db->get('universidad');    
    } 
    function get_data_university($email){
        $this->db->select('*');
      $this->db->from('universidad');
      $this->db->where('email_universidad', $email);
      return $this->db->get();   
    }
    function get_carrera(){
      $this->db->distinct();
      return $this->db->get('carrera');    
    } 
    function get_name_uniS($email){
        $this->db->select('nombre_universidad');
         $this->db->from('universidad');
         $this->db->join('alumno','universidad.id_universidad= alumno.id_universidad');
          $this->db->where('email_alumno',$email);
          return $this->db->get();
        
    }
     function get_name_carS($email){
        $this->db->select('nivel,nombre_carrera');
         $this->db->from('carrera');
          $this->db->join('alumno','carrera.id_carrera= alumno.id_carrera');
          $this->db->where('email_alumno',$email);
          return $this->db->get();
        
    }
    
    function add_new_university($data){
         $this->db->insert('universidad',$data);
    }
    
    function modify_university($id_uni, $newdata){
        
    }
    
    function add_divi($value)
    {
      $this->db->insert('info_univirsidad',$value);
    }
     function get_div_uni()
   {
     $this->db->select('id_info,info_univirsidad.id_universidad,nom_division,nom_carrera,nom_director,nom_res_estadia,num_ext_division');
     $this->db->from('info_univirsidad');
     $this->db->join('universidad','info_univirsidad.id_universidad=universidad.id_universidad');
       $this->db->where('email_universidad',$this->session->userdata('nom_usuario'));
     return $this->db->get();         
   }
    function get_div_uni2($id)
   {
     $this->db->select('id_info,info_univirsidad.id_universidad,nom_division,nom_carrera,nom_director,nom_res_estadia,num_ext_division,universidad.nombre_universidad');
     $this->db->from('info_univirsidad');
     $this->db->join('universidad','info_univirsidad.id_universidad=universidad.id_universidad');
       $this->db->where('universidad.id_universidad',$id);
     return $this->db->get();         
   }
}