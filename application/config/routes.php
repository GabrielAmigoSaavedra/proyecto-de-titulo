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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Usuario_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




/**USUARIO */

$route['login'] = 'Usuario_controller/IniciarSesion';


$route['cerrarSesion'] = 'Usuario_controller/cerrarSesion';




/**ADMINISTRADOR */

$route['Dashboard/Administrador'] = 'Administrador_controler';


/**/$route['Usuarios'] = 'Administrador_controler/mostrarCoordinadores';

/**///$route['Administrador/PruebaInput'] = 'Administrador_controler/pruebaArrayInput';

/**/$route['Administrador/IngresarNuevoCoordinador'] = 'Administrador_controler/insertarCoordinador';


/**COORDINADOR */



$route['Dashboard/Coordinador'] = 'Coordinador_controller';


//$route['mostrarCoordinadores'] = 'Coordinador_controller/mostrarTodosLosCoordinadores';


$route['todosLosAlumnos'] = 'Coordinador_controller/mostrarAlumnos';

$route['ingresarAlumno'] = 'Coordinador_controller/insertarAlumno';


/**ALUMNO */


$route['FormularioSocio'] = 'Alumno_controller/formulario';

$route['FormularioPreguntas'] = 'Alumno_controller';

$route['validarFormularioSocio'] = 'Alumno_controller/validarFormularioSociodemografico';

$route['validarCuestionarioMSLQ'] = 'Alumno_controller/validarMSLQ';



