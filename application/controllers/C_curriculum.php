<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_curriculum extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Alumno');
        $this->load->model('M_curriculum');
    }
     public function nuevoCV()
	{
		if($this->session->userdata('logueado')){
		 	$data['nombre'] = $this->session->userdata('nom_usuario');
		  	$data['info']=$this->Alumno->get_d_student( $data['nombre']);
		  	$data['tipo']="new";
		  	$data['num_curri']=$this->M_curriculum->get_num_curri();
			$this->load->view('layout/curriculum',$data);
		}else{
			redirect('iniciar-sesion');
      }
	}

	function GuardarCV()
	{
		//agrega a la tabla curriculum 
		
			$nCurri['id_curriculum']=null;
			$nCurri['matricula_alumno']=$this->input->post('txtmatri');
		
		
		//recupera el id maximo de la tabla curriculum
		$this->M_curriculum->add_curri($nCurri);
		$q=$this->M_curriculum->Max_id();
		foreach ($q->result() as $row)
		{
		        $q=$row-> id_curriculum;
		}
		
		//tabla acerca de 
		$acCurri['id_cacerca']=null;
		$acCurri['id_curriculum']=$q;
		$acCurri['acerca_de_mi']=$this->input->post('aboutme');
		$this->M_curriculum->add_acercade($acCurri);
		//agrega a la tabla curri_objetivo
		$oCurri['id_cobj']=null;
		$oCurri['id_curriculum']=$q;
		$oCurri['objetivo_personal']=$this->input->post('obj');
		$this->M_curriculum->add_objetivo($oCurri);
		//agrega a la tbala curri_empleo
		$eCurri['id_clab']=null;
		$eCurri['id_curriculum']=$q;
		$eCurri['nom_puesto']=$this->input->post('txttrabajo');
		$eCurri['nom_empresa']=$this->input->post('txtempresa');
		$eCurri['desc_trabajo']=$this->input->post('txtdesc1');
		$eCurri['fecha_inicio']=$this->input->post('txtinicio');
		$eCurri['fecha_fin']=$this->input->post('txtfin');
		$this->M_curriculum->add_trabajo($eCurri);
		//agrega a la tbala curri_empleo2
		$eCurri['id_clab']=null;
		$eCurri['id_curriculum']=$q;
		$eCurri['nom_puesto']=$this->input->post('txttrabajo1');
		$eCurri['nom_empresa']=$this->input->post('txtempresa1');
		$eCurri['desc_trabajo']=$this->input->post('txtdesc2');
		$eCurri['fecha_inicio']=$this->input->post('txtinicio1');
		$eCurri['fecha_fin']=$this->input->post('txtfin1');
		$this->M_curriculum->add_trabajo($eCurri);
		//agrega tabla curri_escolar
		$esCurri['id_cesc']=null;
		$esCurri['id_curriculum']=$q;
		$esCurri['nom_carrera']=$this->input->post('txttitulo');
		$esCurri['nom_escuela']=$this->input->post('txtescu');
		$esCurri['fecha_inicio']=$this->input->post('txtinicioE');
		$esCurri['fecha_fin']=$this->input->post('txtfinE');
		$this->M_curriculum->add_escolar($esCurri);
		//agrega tabla curri_escolar
		$esCurri['id_cesc']=null;
		$esCurri['id_curriculum']=$q;
		$esCurri['nom_carrera']=$this->input->post('txttitulo1');
		$esCurri['nom_escuela']=$this->input->post('txtescu1');
		$esCurri['fecha_inicio']=$this->input->post('txtinicioE1');
		$esCurri['fecha_fin']=$this->input->post('txtfinE1');
		$this->M_curriculum->add_escolar($esCurri);
		//agrega tabla curri_idioma
		$idiCurri['id_cidm']=null;
		$idiCurri['id_curriculum']=$q;
		$idiCurri['reading']=$this->input->post('tr');
		$idiCurri['listening']=$this->input->post('tl');
		$idiCurri['speaking']=$this->input->post('ts');
		$this->M_curriculum->add_idioma($idiCurri);
		//agregar a tabla curri_interese
		$intCurri['id_cint']=null;
		$intCurri['id_curriculum']=$q;
		foreach ($this->input->post('interes[]') as $key => $value) {
			$intCurri['intereses']=$value;
        $this->M_curriculum->add_interes($intCurri);
		}
		//tabla habilidades_personales
		$c_ha_pe['id_cperson']=null;
		$c_ha_pe['id_curriculum']=$q;
		foreach ($this->input->post('person[]') as $key => $value) {
			$c_ha_pe['habilidad_personal']=$value;
        $this->M_curriculum->add_hapersonal($c_ha_pe);
		}
		//tabla habilidades_tecnicas
		$c_ha_te['id_ctecnico']=null;
		$c_ha_te['id_curriculum']=$q;
		foreach ($this->input->post('tecni[]') as $key => $value) {
			$c_ha_te['habilidad_tecnica']=$value;
        $this->M_curriculum->add_hatecnico($c_ha_te);
		}

		//tablas justificacion
		$aaa['id_cjustec']=null;
		$aaa['id_curriculum']=$q;
		$aaa['justificacion_tecnica']=$this->input->post('txttecnica');
		$this->M_curriculum->jus_tec($aaa);
		$bbb['id_cjusper']=null;
		$bbb['id_curriculum']=$q;
		$bbb['justificacion_personal']=$this->input->post('txtpersonal');
		$this->M_curriculum->jus_per($aaa);

		redirect('C_curriculum/carga_curri/'.$nCurri['matricula_alumno']);
		//$intCurri['intereses']=$value;
      //  $this->M_curriculum->add_interes($intCurri);
	}

	function do_upload($es_de) {
            
        
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '*';
        

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
           echo $error;
        } else {
       
            $file_info = $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            $da['id_pdf']=null;
            $da['matricula_alumno']=$es_de;
            $da ['nombre']= $file_info['file_name'];
          	$this->M_curriculum->subir($da); 
            	 
            }
        }
        function carga_curri($matricula){
        	$data['hate']=$this->M_curriculum->ver_tec($matricula);
        	$data['hape']=$this->M_curriculum->ver_per($matricula);
        	$data['datos']=$this->M_curriculum->ver_curri($matricula);
        	$data['es']=$this->M_curriculum->escolar($matricula);
        	$data['la']=$this->M_curriculum->laboral($matricula);
        	$data['intereses']=$this->M_curriculum->interses($matricula);
        	$this->load->view('CV/index',$data);
        }
        
        
    }

   

