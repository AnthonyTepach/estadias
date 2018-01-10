<?php

class M_proyecto extends CI_Model
{
  // select nombre_proyecto, objetivo_proyecto,nom_area,responsable_proyecto,nombre_empresa
  //from alumno_asignado natural join alumno natural join empresa natural join proyecto natural join proyecto_detalle natural join area;
     
   function get_proyecto()
   {
     $this->db->select('nombre_empresa,nombre_proyecto,objetivo_proyecto,nom_area,responsable_proyecto,fecha_inicio');
     $this->db->from('alumno_asignado');
     $this->db->join('alumno','alumno_asignado.matricula_alumno=alumno.matricula_alumno');
     $this->db->join('empresa','alumno_asignado.rfc_empresa=empresa.rfc_empresa');
     $this->db->join('proyecto','alumno_asignado.id_proyecto=proyecto.id_proyecto');  
     $this->db->join('proyecto_detalle','proyecto.id_proyecto=proyecto_detalle.id_proyecto'); 
     $this->db->join('area','proyecto_detalle.id_area=area.id_area'); 
     $this->db->where('email_alumno',$this->session->userdata('nom_usuario'));
     return $this->db->get();
   }
   function get_em_proyecto()
   {
     $this->db->select('proyecto.id_proyecto,id_proyecto_detalle,nombre_proyecto,objetivo_proyecto,nom_area,responsable_proyecto,fecha_inicio');
     $this->db->from('empresa');
     $this->db->join('proyecto','empresa.rfc_empresa=proyecto.rfc_empresa');
     $this->db->join('proyecto_detalle','proyecto.id_proyecto=proyecto_detalle.id_proyecto');
     $this->db->join('area','proyecto_detalle.id_area=area.id_area');
     $this->db->where('email_empresa',$this->session->userdata('nom_usuario'));
     return $this->db->get();         
   }
   function Max_id()
  {
    $this->db->select_max('id_proyecto');
    return $this->db->get('proyecto');  

  }
  function areas()
  {
    return $this->db->get('area');
  }
function asignaP($data){

      $this->db->insert('alumno_asignado',$data);
    }
  function ad_name($value)
  {
    $this->db->insert('proyecto',$value);
  }
  function add_detalle($value)
  {
    $this->db->insert('proyecto_detalle',$value);
  }
  function modify_name($id_pro, $newdata){
    $this->db->where('id_proyecto',$id_pro);
    $this->db->update('proyecto',$newdata);
          
  }
  function delete($id_pro){
    $this->db->where('id_proyecto',$id_pro);
    $this->db->delete('proyecto');
          
  }
function get_rfc($id){
$this->db->select('rfc_empresa');
$this->db->from('proyecto');
$this->db->where('id_proyecto',$id);
return $this->db->get();
}

  function modify_detail($id_pro_de, $newdata){
    $this->db->where('id_proyecto_detalle',$id_pro_de); 
    $this->db->update('proyecto_detalle',$newdata);
   }
   function get_all_pro()
   {
     $this->db->select('empresa.rfc_empresa,nombre_empresa,nombre_proyecto,responsable_proyecto,nom_area,proyecto.id_proyecto');
     $this->db->from('empresa');
     $this->db->join('proyecto','empresa.rfc_empresa=proyecto.rfc_empresa');
     $this->db->join('proyecto_detalle','proyecto.id_proyecto=proyecto_detalle.id_proyecto');
     $this->db->join('area','proyecto_detalle.id_area=area.id_area');
     $this->db->order_by('nombre_empresa','asc');
     return $this->db->get();
   }

   function get_evaluador()
   {
      $this->db->select('rfc_empresa')->from('empresa')->where('email_empresa',$this->session->userdata('nom_usuario'));
    $subQuery =  $this->db->get_compiled_select();
 
    // Main Query
    $this->db->select('responsable_proyecto')->from('proyecto_detalle')->join("proyecto","proyecto_detalle.id_proyecto=proyecto.id_proyecto")->where("rfc_empresa IN ($subQuery)", NULL, FALSE);
    return $this->db->get();
   }
}