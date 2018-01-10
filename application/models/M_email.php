<?php

class M_email extends CI_Model
{
        function __construct()
    {
        parent::__construct();
      $this->load->library('email','','correo');

    }
    
    function send_email($email,$mensaje)
    {
    
    $this->correo->from('anthony.tepach@gmail.com', 'CETIC JALISCO'); // correo sin espacio
    $this->correo->to($email); // correo sin espacio
    $this->correo->subject('Usuario y Contraseña');
    $this->correo->message($mensaje);
    if($this->correo->send())
    {
    echo "<script type='text/javascript>alert('Correo enviado')</script>'";
    }
    else
    {
    show_error($this->correo->print_debugger());
    }
        }
        
   
}