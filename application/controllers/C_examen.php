<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_examen extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_curriculum');
        $this->load->model('M_examen');
        $this->load->model('Alumno');
    }

    function do_upload() {
            
        
        $config['upload_path'] = 'examenes/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '*';
        

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
           echo $error;
        } else {
       
            $file_info = $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            $da['id_examen']=null;
            
            $da ['nombre_examen']= $file_info['file_name'];
          	$this->M_examen->subir($da); 
            	redirect('bienvenido_administrador');  
            }
	           
        }
         function do_zip() {
            
        
        $config['upload_path'] = 'examen_resuelto/';
        $config['allowed_types'] = 'zip';
        $config['max_size'] = '*';
        

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
           echo $error;
        } else {
       
            $file_info = $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            $da['id_exam_he']=null;
            $da['matricula_alumno']=$this->input->post('txtmatricula');
            $da ['nombre_archivo']= $file_info['file_name'];
            $this->M_examen->subir_practica($da);
           
            redirect('mi_examen');
           
            }
               
        }


        function asigna(){
            $fecha=  date("Y") . "-" . date("m") . "-" . date("d");
            $hora= date("H") . ":" . date("i") . ":" . date("s");
           
        	$data['id_ex_asignado']=null;
        	$data['matricula_alumno']=$this->input->post('matri');
        	$data['id_examen']=$this->input->post('idexa');
        	$data['fecha_activado']=$fecha;
            $data['hora_inicio']=$hora;
        	$this->M_examen->asignar($data); 
            redirect('bienvenido_administrador'); 

        }

        function ver(){
           if($this->session->userdata('logueado') && $this->session->userdata('tipo_usuario')=="Alumno"){
             $data['num_curri']=$this->M_curriculum->get_num_curri();
             $data['nombre'] = $this->session->userdata('nom_usuario');          
            $data['info']=$this->Alumno->get_d_student( $data['nombre']);
            $data['exam']=$this->M_examen->get_exam();
            $data['echo']=$this->M_examen->get_exam_hecho();
            $data['subir']=null;
            $this->load->view('layout/ver_examen',$data);
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
}