<?php

class M_sistema extends CI_Model
{
	public function parametros($tipo)
	{
		$this->db->where('tipo',$tipo);
	return $this->db->get('parametro_sistema');  
	}
	public function update_objetivo($id_pro,$newdata){
		 $this->db->where('id_parametro',$id_pro);
   		 $this->db->update('parametro_sistema',$newdata);
	}
	public function update_modelo($id_pro,$newdata){
		 $this->db->where('id_parametro',$id_pro);
   		 $this->db->update('parametro_sistema',$newdata);
	}
	public function update_parametro($id_pro,$newdata){
		 $this->db->where('id_parametro',$id_pro);
   		 $this->db->update('parametro_sistema',$newdata);
	}
}
