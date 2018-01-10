<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_universidad extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Direccion');
		$this->load->model('Universidad');
		$this->load->model('Alumno');

    }

     public function reg_uni()
	{
		$data['uni']=$this->Universidad->get_university();
		$data['carr']=$this->Universidad->get_carrera();
		$data['es']=$this->Direccion->get_estado();
		$data['muni']=$this->Direccion->get_municipio();
		$data['name']="universidad";
		$this->load->view('registro',$data);
	}

	public function add_universidad(){
		$data['id_universidad']=null;
		$data['nombre_universidad']=$this->input->post('txtnom');
		$data['calle_universidad']=$this->input->post('txtcalle');
		$data['colonia_universidad']=$this->input->post('txtcolo');
		$data['cp_universidad']=$this->input->post('txtcp');
		$data['municipio_universidad']=$this->input->post('opcmuni');
		$data['estado_universidad']=$this->input->post('opcest');
		$data['email_universidad']=$this->input->post('txtemail');
		$data['tel_fijo_universidad']=$this->input->post('txttel');
		$data['fecha_registro_uni']='CURDATE()';
		$this->Universidad->add_new_university($data);
		
		redirect('Welcome/index','refresh');
	}
	public function view_new_area(){
		 $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['tipo']=$this->session->userdata('tipo_usuario');
         $data['info']=$this->Universidad->get_data_university($data['nombre']);
		$this->load->view('layout/info_escuela',$data);
	}

	public function add_div()
	{
		$data['id_info']=null;
		$data['id_universidad']=$this->input->post('txtid');
		$data['nom_division']=$this->input->post('txtdiv');
		$data['nom_carrera']=$this->input->post('txtcar');
		$data['nom_director']=$this->input->post('txtdir');
		$data['nom_res_estadia']=$this->input->post('txtes');
		$data['num_ext_division']=$this->input->post('txtnum');
		$this->Universidad->add_divi($data);
		redirect('C_universidad/ver_divisiones','refresh');
	}
	public function ver_divisiones()
	{	
		 $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['tipo']=$this->session->userdata('tipo_usuario');
		$data['info']=$this->Universidad->get_div_uni();
		$this->load->view('layout/ver_diviciones',$data);

	}

	public function ver_divisiones2($id)
	{	
		 
		$data['info']=$this->Universidad->get_div_uni2($id);
		$this->load->view('layout/ver_divicionesIndi',$data);

	}
	public function ver_alumnos()
	{	
		 $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['tipo']=$this->session->userdata('tipo_usuario');
		$data['info']=$this->Alumno->get_alumnos_uni();
		$this->load->view('layout/ver_alumnos',$data);

	}
}