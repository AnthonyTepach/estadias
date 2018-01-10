<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sistema extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_sistema');
    }

    function actualizaOBJ($id){
        $data['definicion']=$this->input->post('txtobj');
        $this->M_sistema->update_objetivo($id,$data);
        redirect('bienvenido_administrador');
    }
    function actualizaMDL($id){
        $data['modelo']=$this->input->post('txtobj');
        $this->M_sistema->update_modelo($id,$data);
        redirect('bienvenido_administrador');
    }
    function actualizaRQS($id){
        $data['requisitos']=$this->input->post('txtobj');
        $this->M_sistema->update_parametro($id,$data);
        redirect('bienvenido_administrador');
    }
}