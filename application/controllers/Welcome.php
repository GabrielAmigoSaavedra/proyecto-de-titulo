<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('ejemplo_view');
	}

	public function validarForm()
	{
		 $formSocio_rut = $this->input->post("formSocio_rut");

         $formSocio_nombres = $this->input->post("formSocio_nombres");
        
         $formSocio_apellidos = $this->input->post("formSocio_apellidos");
        
         $formSocio_nacionalidad = $this->input->post("formSocio_nacionalidad");
        
         $formSocio_edad = $this->input->post("formSocio_edad");

         $formSocio_genero = $this->input->post("formSocio_genero");

         $formSocio_carreraActual = $this->input->post("formSocio_carreraActual");

         $formSocio_carreraPrimeraOpcionSiNo = $this->input->post("formSocio_carreraPrimeraOpcionSiNo");
		 
		 $formSocio_carreraPrimeraOpcion = $this->input->post("formSocio_carreraPrimeraOpcion");

         $formSocio_convivencia = $this->input->post("formSocio_convivencia");
		 
         $formSocio_trayecto = $this->input->post("formSocio_trayecto");

         $formSocio_carreraDePrecedenciaSiNo = $this->input->post("formSocio_carreraDePrecedenciaSiNo");
        
		 $formSocio_carreraDePrecedenciaIngresar = $this->input->post("formSocio_carreraDePrecedenciaIngresar");

         $formSocio_razonParaElegirLaCarreraActual = $this->input->post("formSocio_razonParaElegirLaCarreraActual");
		 
         $formSocio_razonParaElegirLaCarreraActualIngresarMotivo = $this->input->post("formSocio_razonParaElegirLaCarreraActualIngresarMotivo");

         $formSocio_condicionMentalDiagnosticadaSiNoNose = $this->input->post("formSocio_condicionMentalDiagnosticadaSiNoNose");

         $formSocio_nombreDeCondicionMentalDiagnosticada = $this->input->post("formSocio_nombreDeCondicionMentalDiagnosticada");

		 $formSocio_beneficioGratuidadSiNo = $this->input->post("formSocio_beneficioGratuidadSiNo");
			
		 $valores = array(

        	"formSocio_rut" => $formSocio_rut,

			"formSocio_nombres" => $formSocio_nombres,

        	"formSocio_apellidos" => $formSocio_apellidos,

			"formSocio_nacionalidad" => $formSocio_nacionalidad,
			
        	"formSocio_edad" => $formSocio_edad,
			
        	"formSocio_carreraPrimeraOpcionSiNo" => $formSocio_carreraPrimeraOpcionSiNo,
        	
			"formSocio_carreraDePrecedenciaSiNo" => $formSocio_carreraDePrecedenciaSiNo,
		
			
			"formSocio_razonParaElegirLaCarreraActual" => $formSocio_razonParaElegirLaCarreraActual,
			
			"formSocio_condicionMentalDiagnosticadaSiNoNose" => $formSocio_condicionMentalDiagnosticadaSiNoNose,
			
			"formSocio_nombreDeCondicionMentalDiagnosticada" => $formSocio_nombreDeCondicionMentalDiagnosticada,
			
			"formSocio_beneficioGratuidadSiNo" => $formSocio_beneficioGratuidadSiNo,
		);

		/**FUNCIONA */
		if($formSocio_genero != "NULL"){
			$valores += array(
				"formSocio_genero" => $formSocio_genero
			);
		}

		/**FUNCIONA */
		if($formSocio_carreraActual != "NULL"){
			$valores += array(

         		"formSocio_carreraActual" => $formSocio_carreraActual,

			);
		}

		if($formSocio_carreraPrimeraOpcionSiNo == "No"){
			$valores += array(
			/**ingresar carrera de primera opcion */
         		"formSocio_carreraPrimeraOpcion" => $formSocio_carreraPrimeraOpcion
			);
		}

		if($formSocio_convivencia != "NULL"){
			$valores += array(

         		"formSocio_convivencia" => $formSocio_convivencia,

			);
		}
		

		if($formSocio_trayecto != "NULL"){
			$valores += array(

         		"formSocio_trayecto" => $formSocio_trayecto,

			);
		}

		if($formSocio_carreraDePrecedenciaSiNo == "Si"){
			$valores += array(

         		"formSocio_carreraDePrecedenciaIngresar" => $formSocio_carreraDePrecedenciaIngresar,

			);
		}

		if(	$formSocio_razonParaElegirLaCarreraActual != "NULL"
		
			&& 
			
			$formSocio_razonParaElegirLaCarreraActual == "otroMotivo" )
			{
			
			$valores += array(

         		"formSocio_razonParaElegirLaCarreraActualIngresarMotivo" => $formSocio_razonParaElegirLaCarreraActualIngresarMotivo,

			);
			}
			
		if($formSocio_condicionMentalDiagnosticadaSiNoNose == "Si"){
			$valores += array(
				/**ingresar condicion medica */
         		"formSocio_nombreDeCondicionMentalDiagnosticada" => $formSocio_nombreDeCondicionMentalDiagnosticada,

			);
		}


		
		echo json_encode($valores);
		//insertar valores en base de datos
		$this->Alumnos_model->ingresarFormularioSociodemografico($valores);
/*echo "<pre>5";
		echo $valores["formSocio_rut"];
		
*/
	}
}
