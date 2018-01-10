    <?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_port'] = 465;
    $config['smtp_user'] = 'anthony.tepach@gmail.com'; // correo sin espacio
    $config['smtp_pass'] = 'Tbryan1996';
    $config['smtp_timeout'] = '7';
    $config['charset'] = 'utf-8';
    $config['newline'] = "\r\n";
    $config['mailtype'] = 'text'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not