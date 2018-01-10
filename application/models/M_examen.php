<?php

class M_examen extends CI_Model
{
	function subir($data){

		$this->db->insert('examen_pdf',$data);
		
	}

    function subir_practica($a){
        $this->db->insert('examen_hecho',$a);
    }
	function get_examen(){
        return $this->db->get('examen_pdf');    
    }

    function asignar($a){
    	$this->db->insert('examen_asignado',$a);
    }

    function get_exam(){
    	$this->db->select('nombre_examen,hora_inicio');
    	$this->db->from('examen_asignado');
    	$this->db->join('examen_pdf','examen_asignado.id_examen=examen_pdf.id_examen');
    	$this->db->join('alumno','examen_asignado.matricula_alumno=alumno.matricula_alumno');
    	$this->db->where('email_alumno',$this->session->userdata('nom_usuario'));
    	return $this->db->get();

    }
    function get_exam_hecho(){
        $this->db->select('examen_hecho.matricula_alumno,nombre_archivo');
        $this->db->from('examen_hecho');
        $this->db->join('alumno','examen_hecho.matricula_alumno=alumno.matricula_alumno');
        $this->db->where('email_alumno',$this->session->userdata('nom_usuario'));
        return $this->db->get();

    }
     
}