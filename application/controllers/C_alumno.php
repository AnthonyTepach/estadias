<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_alumno extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Direccion');
        $this->load->model('Universidad');
		$this->load->model('Alumno');
		

    }

    public function reg_alumno()
	{
		$data['uni']=$this->Universidad->get_university();
		$data['carr']=$this->Universidad->get_carrera();
		$data['es']=$this->Direccion->get_estado();
		$data['muni']=$this->Direccion->get_municipio();
		$data['name']="alumno";
		$this->load->view('registro',$data);
	}

	public function add_alumno(){
		$data['matricula_alumno']=$this->input->post('txtmatri');
		$data['nombre_alumno']=$this->input->post('txtnom');
		$data['a_paterno_alumno']=$this->input->post('txtapat');
		$data['a_materno_alumno']=$this->input->post('txtamat');
		$data['calle_alumno']=$this->input->post('txtcalle');
		$data['colonia_alumno']=$this->input->post('txtcolo');
		$data['cp_alumno']=$this->input->post('txtcp');
		$data['municipio_alumno']=$this->input->post('opcmuni');
		$data['estado_alumno']=$this->input->post('est');
		$data['email_alumno']=$this->input->post('txtemail');
		$data['tel_cel_alumno']=$this->input->post('txttel');
		$data['no_seguro_social']=$this->input->post('txtss');
		$data['fecha_registro_alum']=date('Y') .'-'. date('m') . '-' . date('d') ;
		$data['id_universidad']=$this->input->post('opcuni');
		$data['id_carrera']=$this->input->post('opccar');
		$this->Alumno->nuevo_alumno($data);
		redirect('C_usuario/login','refresh');
	}

	
}