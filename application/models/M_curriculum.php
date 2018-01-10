<?php

class M_curriculum extends CI_Model
{

function jus_tec($data)
	{
		# code...
		$this->db->insert('curri_jus_tecnico',$data);
	}
	function jus_per($data)
	{
		# code...
		$this->db->insert('curri_jus_personal',$data);
	}

	function add_objetivo($data)
	{
		# code...
		$this->db->insert('curri_objetivo',$data);
	}
	function add_trabajo($data)
	{
		# code...
		$this->db->insert('curri_laboral',$data);
	}
	function add_escolar($data)
	{
		# code...
		$this->db->insert('curri_escolar',$data);
	}
	function add_idioma($data)
	{
		# code...
		$this->db->insert('curri_idioma',$data);
	}
	function add_interes($data)
	{
		# code...
		$this->db->insert('curri_interese',$data);
	}

	function add_acercade($data)
	{
		# code...
		$this->db->insert('curri_acerca_de',$data);
	}
	function add_hapersonal($data)
	{
		# code...
		$this->db->insert('curri_ha_person',$data);
	}
	function add_hatecnico($data)
	{
		# code...
		$this->db->insert('curri_ha_tecnica',$data);
	}

	function add_curri($data)
	{
		# code...
		$this->db->insert('curriculum',$data);
	}
	function Max_id()
	{
		$this->db->select_max('id_curriculum');
		return $this->db->get('curriculum');  

	}
	function get_num_curri(){
		// Sub Query
		$this->db->select('matricula_alumno')->from('alumno')->where('email_alumno',$this->session->userdata('nom_usuario'));
		$subQuery =  $this->db->get_compiled_select();
 
		// Main Query
		$this->db->select('count(matricula_alumno) AS num')->from('curriculum')->where("matricula_alumno IN ($subQuery)", NULL, FALSE);
		return $this->db->get();
	}

	function subir($data){

		$this->db->insert('curri_pdf',$data);
		
	}

	function ver_curri($matri){
		$this->db->select('*');
		$this->db->from('alumno');
		$this->db->join('curriculum','alumno.matricula_alumno=curriculum.matricula_alumno');
		$this->db->join('curri_objetivo','curriculum.id_curriculum=curri_objetivo.id_curriculum');
		$this->db->join('curri_idioma','curriculum.id_curriculum=curri_idioma.id_curriculum');
		$this->db->join('curri_acerca_de','curriculum.id_curriculum=curri_acerca_de.id_curriculum');
		$this->db->join('curri_jus_personal','curriculum.id_curriculum=curri_jus_personal.id_curriculum');
		$this->db->join('curri_jus_tecnico','curriculum.id_curriculum=curri_jus_tecnico.id_curriculum');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}
	function interses($matri){
		$this->db->select('intereses');
		$this->db->from('curri_interese');
		$this->db->join('curriculum','curri_interese.id_curriculum=curriculum.id_curriculum');
		$this->db->join('alumno','curriculum.matricula_alumno=alumno.matricula_alumno');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}

	function ver_tec($matri){
		$this->db->select('habilidad_tecnica');
		$this->db->from('curri_ha_tecnica');
		$this->db->join('curriculum','curri_ha_tecnica.id_curriculum=curriculum.id_curriculum');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}

	function ver_per($matri){
		$this->db->select('habilidad_personal');
		$this->db->from('curri_ha_person');
		$this->db->join('curriculum','curri_ha_person.id_curriculum=curriculum.id_curriculum');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}

	
	function escolar($matri){
		$this->db->select('nom_carrera,nom_escuela,fecha_inicio,fecha_fin');
		$this->db->from('curri_escolar');
		$this->db->join('curriculum','curri_escolar.id_curriculum=curriculum.id_curriculum');
		$this->db->join('alumno','curriculum.matricula_alumno=alumno.matricula_alumno');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}
	function laboral($matri){
		$this->db->select('nom_puesto,nom_empresa,fecha_inicio,fecha_fin,desc_trabajo');
		$this->db->from('curri_laboral');
		$this->db->join('curriculum','curri_laboral.id_curriculum=curriculum.id_curriculum');
		$this->db->join('alumno','curriculum.matricula_alumno=alumno.matricula_alumno');
		$this->db->where('curriculum.matricula_alumno',$matri);
		return $this->db->get();
	}
	
}