<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_proyecto extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    	$this->load->model('Alumno');
    	$this->load->model('M_proyecto');
    	$this->load->model('Empresa');
    	$this->load->model('M_curriculum');

    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function proyecto()
	{
		if($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Alumno"){
			$data['nombre'] = $this->session->userdata('nom_usuario');
			$data['num_curri']=$this->M_curriculum->get_num_curri();
		  	$data['info']=$this->Alumno->get_d_student( $data['nombre']);
		  	$data['proyecto']=$this->M_proyecto->get_proyecto();
			$this->load->view('layout/proyectos',$data);
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
							var mjs='función solo para alumnos';
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
		
	public function new_project()
	{
		if ($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Empresa") {
			$data['nombre'] = $this->session->userdata('nom_usuario');
			$data['info']=$this->Empresa->get_data_company($data['nombre']);
			$data['area']=$this->M_proyecto->areas();
			$this->load->view('layout/nuevoproyecto',$data);
		}
		else{
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
	public function see_project()
	{
		if ($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Empresa") {
			$data['nombre'] = $this->session->userdata('nom_usuario');
			$data['info']=$this->Empresa->get_data_company($data['nombre']);
			$data['proyecto']=$this->M_proyecto->get_em_proyecto();
			$data['area']=$this->M_proyecto->areas();
			$this->load->view('layout/verproyecto',$data);
		}
		else{
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
							alertify.notify('Saliendo','error',10, null);
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
	
	 public function add_pro()
	 {
	 	//echo $this->input->post('txtrfc');
	 	$dataP['id_proyecto']=null;
	 	$dataP['rfc_empresa']=$this->input->post('txtrfc');
	 	
	 	$dataP['nombre_proyecto']=$this->input->post('txtpro');
	 	$this->M_proyecto->ad_name($dataP);
	 	$q=$this->M_proyecto->Max_id();
	 	foreach ($q->result() as $row)
		{
		        $q=$row-> id_proyecto;
		}

		$datePD['id_proyecto_detalle']=null;
		$datePD['id_proyecto']=$q;
		$datePD['objetivo_proyecto']=$this->input->post('txtobj');
		$datePD['id_area']=$this->input->post('objArea');
		$datePD['responsable_proyecto']=$this->input->post('txtlider');
		
		$datePD['horario_proyecto']=$this->input->post('txthora');
		$datePD['fecha_inicio']=$this->input->post('txtfecha');
		$this->M_proyecto->add_detalle($datePD);
		redirect('ver_proyectos');

	 }
		public function modifica()
		{
			$datapro['nombre_proyecto']=$this->input->post('txtupNom');
			$id_pr=$this->input->post('txtidpro');
			$this->M_proyecto->modify_name($id_pr,$datapro);
			$id_pro_de=$this->input->post('txtproidde');
			$dataprode['objetivo_proyecto']=$this->input->post('obj');
			$dataprode['responsable_proyecto']=$this->input->post('txtupRes');
			$dataprode['fecha_inicio']=$this->input->post('txtupFecha');
			$dataprode['id_area']=$this->input->post('ar');
			$this->M_proyecto->modify_detail($id_pro_de,$dataprode);
			redirect('ver_proyectos');
		}

		public function elimina($if)
		{
			$this->M_proyecto->delete($if);
			redirect('ver_proyectos');
		}

		public function asignar(){
			$q=$this->M_proyecto->get_rfc($this->input->post('idpro'));
			 foreach ($q-> result() as $r)  {
			 	$q=$r-> rfc_empresa;
			 }	
			
			$data['id_asignacion']=null;
			$data['matricula_alumno']=$this->input->post('matri');
			$data['rfc_empresa']=$q;
			$data['id_proyecto']=$this->input->post('idpro');
			$this->M_proyecto->asignaP($data);
			redirect(base_url().'index.php/bienvenido_administrador');
			
		}
	
}
