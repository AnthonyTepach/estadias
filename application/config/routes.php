<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['registro_universidad']='/C_universidad/reg_uni';
$route['registro_alumno']='/C_alumno/reg_alumno';
$route['registro_empresa']='/C_empresa/reg_empresa';
$route['iniciar-sesion']='/C_usuario/login';
$route['cerrar_sesion']='/C_usuario/logout';
$route['bienvenido']='/C_usuario/iniciar_sesion_post';
$route['bienvenido_alumno']='/C_usuario/loguear_alumno';
$route['bienvenido_empresa']='/C_usuario/laguear_empresa';
$route['bienvenido_universidad']='/C_usuario/laguear_uni';
$route['bienvenido_administrador']='/C_usuario/loguear_admin';
$route['CV']='/C_curriculum/nuevoCV';
$route['ver_proyecto']='/C_proyecto/proyecto';
$route['ver_proyectos']='/C_proyecto/see_project';
$route['nuevo_proyecto']='/C_proyecto/new_project';
$route['modifica_proyecto']='/C_proyecto/modifica';
$route['evalua']='/C_evaluacion/evaluar';
$route['mi_examen']='/C_examen/ver';
$route['calendario']='/welcome/eventos';
