<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_usuario');
        $this->load->model('Alumno');
        $this->load->model('Universidad');
        $this->load->model('Empresa');
        $this->load->model('M_curriculum');
        $this->load->model('M_proyecto');
        $this->load->model('M_sistema');
        $this->load->model('M_examen');
        $this->load->library('calendar');
    }

	public function login()
	{
      $this->session->sess_destroy();
			$this->load->view('login');
	}
		
	public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre = $this->input->post('txtema');
         $contrasena =md5( $this->input->post('txtpass'));
         $usuario = $this->M_usuario->get_usuario($nombre, $contrasena);
         if ($usuario) {
            $usuario_data = array(
              'tipo_usuario'=>$usuario->tipo_usuario,
              'nom_usuario' => $usuario->nom_usuario,
              'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            
            if ($this->session->userdata('tipo_usuario')=='Alumno') {
              redirect('bienvenido_alumno');
            }elseif ($this->session->userdata('tipo_usuario')=='Empresa') {
              redirect('bienvenido_empresa');
            }elseif ($this->session->userdata('tipo_usuario')=='Universidad') {
              redirect('bienvenido_universidad');
            }elseif ($this->session->userdata('tipo_usuario')=='Administrador') {
             redirect('bienvenido_administrador');
            }
           
         } else {
            //no existe el usuario
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
              var mjs='Contraseña incorrecta, verifica tus datos';
              var alert = alertify.alert('Datos incorrectos',mjs).set('label', 'Aceptar');        
              alert.set({transition:'flipy'}); //slide, zoom, flipx, flipy, fade, pulse (default)
              alert.set('modal', false);  //al pulsar fuera del dialog se cierra o no 
              alertify.notify('Saliendo','error',10, null);
              setTimeout(window.location = '".base_url()."index.php/iniciar-sesion', 3000);
              
            }
            
            </script>
          </head>
          <body onload='adios();' bgcolor='black'>
            
          </body>
          </html>";
         }
      } else {
            // contraseña y/o uuario incorrecto
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
              var mjs='Usuario no existe, verifica tus datos';
              var alert = alertify.alert('Datos incorrectos',mjs).set('label', 'Aceptar');        
              alert.set({transition:'flipy'}); //slide, zoom, flipx, flipy, fade, pulse (default)
              alert.set('modal', false);  //al pulsar fuera del dialog se cierra o no 
              alertify.notify('Saliendo','error',10, null);
              setTimeout(window.location = '".base_url()."index.php/iniciar-sesion', 3000);
              
            }
            
            </script>
          </head>
          <body onload='adios();' bgcolor='black'>
            
          </body>
          </html>";
      }
   }
   public function loguear_alumno() {
      if($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Alumno"){
         $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['num_curri']=$this->M_curriculum->get_num_curri();
         $data['info']=$this->Alumno->get_d_student( $data['nombre']);
         $data['es']=$this->Universidad->get_name_uniS($data['nombre']);
         $data['carrera']=$this->Universidad->get_name_carS($data['nombre']);
         $data['tipo']=$this->session->userdata('tipo_usuario');
         $data['parametro']=$this->M_sistema->parametros('Alumno');
         $this->load->view('loguear', $data);
      }else{
         redirect('iniciar-sesion');
      }
   }

   public function laguear_empresa()
   {
    if($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Empresa"){
         $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['alumno']= $this->Alumno->get_all_students();
         $data['tipo']=$this->session->userdata('tipo_usuario');
         $data['info']=$this->Empresa->get_data_company($data['nombre']);
         $data['parametro']=$this->M_sistema->parametros('Empresa');
         $this->load->view('loguear', $data);

      }else{
         redirect('iniciar-sesion');
      }
   }
   public function laguear_uni()
   {
    if($this->session->userdata('logueado')  && $this->session->userdata('tipo_usuario')=="Universidad"){
         $data['nombre'] = $this->session->userdata('nom_usuario');
         $data['tipo']=$this->session->userdata('tipo_usuario');
         $data['info']=$this->Universidad->get_data_university($data['nombre']);
         $data['parametro']=$this->M_sistema->parametros('Universidad');
         $this->load->view('loguear', $data);
      }else{
         redirect('iniciar-sesion');
      }
   }
    public function loguear_admin()
    {
      if ($this->session->userdata('logueado')  && $this->session->userdata('tipo_usuario')=="Administrador") {
        $data['nombre'] = $this->session->userdata('nom_usuario');
        $data['alumno']= $this->Alumno->get_all_students();
        $data['todo']=$this->Alumno->get_all_students2();
        $data['empresa']=$this->Empresa->get_company();
        $data['univer']=$this->Universidad->get_university();
        $data['proyecto']=$this->M_proyecto->get_all_pro();
        $data['parametro_alumno']=$this->M_sistema->parametros('Alumno');
        $data['parametro_empresa']=$this->M_sistema->parametros('Empresa');
        $data['calen']=$this->calendar->generate();
        $data['exa']=$this->M_examen->get_examen();
        $this->load->view('administrador', $data);
      }
      else{
         redirect('iniciar-sesion');
      }
    }
    public function logout() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
       redirect('iniciar-sesion');
   }
	
}