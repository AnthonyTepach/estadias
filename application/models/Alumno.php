<?php

class Alumno extends CI_Model
{
    
    function get_student(){
        return $this->db->get('alumno');    
    }
    
    
    function nuevo_alumno($data){
        $this->db->insert('alumno',$data);
    }
    
    function get_d_student($email)
    {
      $this->db->select('*');
      $this->db->from('alumno');
      $this->db->where('email_alumno', $email);
      return $this->db->get();
    }
   
    function get_info_uni($email)
    {
      $this->db->select('id_universidad');
      $this->db->from('alumno');
      $this->db->where('email_alumno', $email);
      return $this->db->get();
    }
    function get_info_car($email)
    {
      $this->db->select('id_universidad');
      $this->db->from('alumno');
      $this->db->where('email_alumno', $email);
      return $this->db->get();
    }
    function get_all_students()
    {
      $this->db->select("alumno.matricula_alumno, concat(nombre_alumno,' ',a_paterno_alumno,' ', a_materno_alumno) as Nom_completo, concat(nivel,'.',nombre_carrera) as carrera, nombre_universidad,tel_cel_alumno,email_alumno,,id_curriculum");
      $this->db->from('alumno');
      $this->db->join('carrera','alumno.id_carrera=carrera.id_carrera');
      $this->db->join('universidad','alumno.id_universidad=universidad.id_universidad');
      
      $this->db->join('curriculum','alumno.matricula_alumno=curriculum.matricula_alumno');
$this->db->order_by("fecha_registro_alum", "asc");
      return $this->db->get();
    }
    function get_all_students2()
    {
      $this->db->select("alumno.matricula_alumno, concat(nombre_alumno,' ',a_paterno_alumno,' ', a_materno_alumno) as Nom_completo, concat(nivel,'.',nombre_carrera) as carrera, nombre_universidad,tel_cel_alumno,email_alumno");
      $this->db->from('alumno');
      $this->db->join('carrera','alumno.id_carrera=carrera.id_carrera');
      $this->db->join('universidad','alumno.id_universidad=universidad.id_universidad');
       
      $this->db->order_by("fecha_registro_alum", "asc");
      return $this->db->get();
    }

    function get_asignados(){

      $this->db->select('rfc_empresa')->from('empresa')->where('email_empresa',$this->session->userdata('nom_usuario'));
    $subQuery =  $this->db->get_compiled_select();
 
    // Main Query
    $this->db->select('*')->from('alumno_asignado')->join("alumno","alumno_asignado.matricula_alumno=alumno.matricula_alumno")->where("rfc_empresa IN ($subQuery)", NULL, FALSE);
    return $this->db->get();

    }
    function get_alumnos_uni(){

      $this->db->select("alumno.matricula_alumno, concat(nombre_alumno,' ',a_paterno_alumno,' ', a_materno_alumno) as Nom_completo, concat(nivel,'.',nombre_carrera) as carrera, nombre_universidad,tel_cel_alumno,email_alumno");
      $this->db->from('alumno');
      $this->db->join('carrera','alumno.id_carrera=carrera.id_carrera');
      $this->db->join('universidad','alumno.id_universidad=universidad.id_universidad');
      $this->db->where('email_universidad',$this->session->userdata('nom_usuario'));
      $this->db->order_by("fecha_registro_alum", "asc");
      return $this->db->get();

    }
}