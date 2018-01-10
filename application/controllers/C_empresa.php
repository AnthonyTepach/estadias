<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_empresa extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Direccion');
		$this->load->model('Empresa');
		

    }

     public function reg_empresa()
	{
		$data['es']=$this->Direccion->get_estado();
		$data['muni']=$this->Direccion->get_municipio();
		$data['name']="empresa";
		$this->load->view('registro',$data);
	}

	public function add_empresa(){
		$data['rfc_empresa']=$this->input->post('txtrfc');
		$data['nombre_empresa']=$this->input->post('txtnom');
		$data['giro_empresa']=$this->input->post('txtgiro');
		$data['calle_empresa']=$this->input->post('txtcalle');
		$data['colonia_empresa']=$this->input->post('txtcolo');
		$data['cp_empresa']=$this->input->post('txtcp');
		$data['municipio_empresa']=$this->input->post('opcmuni');
		$data['estado_empresa']=$this->input->post('opcest');
		$data['email_empresa']=$this->input->post('txtemail');
		$data['tel_fijo_empresa']=$this->input->post('txttel');
		$this->Empresa->add_new_company($data);
		
		redirect('C_usuario/login','refresh');
	}
}