<?php
class M_usuario extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function get_usuario($nombre, $contrasena){
      $this->db->select('*');
      $this->db->from('usuario');
      $this->db->where('nom_usuario', $nombre);
      $this->db->where('contrasenia', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}