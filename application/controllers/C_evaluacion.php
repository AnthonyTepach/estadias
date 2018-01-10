<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_evaluacion extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Alumno');
        $this->load->model('M_proyecto');
    }
    
    public function evaluar()
    {
    	if($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Empresa"){
			 $data['nombre'] = $this->session->userdata('nom_usuario');
		  	$data['measigno']=$this->Alumno->get_asignados();
		  	$data['evaluador']=$this->M_proyecto->get_evaluador();
			$this->load->view('evaluacion',$data);
		}else{
			echo "<!DOCTYPE html>
					<html>
					<head>
						<title>No disponible</title>
						<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
						<script type='text/javascript' src='".base_url()."assets/js/jquery.js'></script>
						<script type='text/javascript' src='".base_url()."assets/libraries/alertifyjs/alertify.min.js'></script>
						<link rel='stylesheet' href='".base_url()."assets/libraries/alertifyjs/css/alertify.min.css' />
						<link rel='stylesheet' href='".base_url()."assets/libraries/alertifyjs/css/themes/default.min.css' />
						<script>
						function adios(){
							var mjs='función solo para empresas';
							var alert = alertify.alert('Página restringida',mjs).set('label', 'Aceptar');     	 
							alert.set({transition:'zoom'}); //slide, zoom, flipx, flipy, fade, pulse (default)
							alert.set('modal', false);  //al pulsar fuera del dialog se cierra o no	
							alertify.notify('error','warning',10, null);
							setTimeout('goBack()', 2000);
							
						}
						function goBack() {
						    window.history.back();
						}
						</script>
					</head>
					<body onload='adios();' bgcolor='black'>
						
					</body>
					</html>";
      }
    }
}