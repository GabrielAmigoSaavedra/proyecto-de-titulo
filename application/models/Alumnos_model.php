<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Alumnos_model extends CI_Model {


    public function __construct()
	{
		parent::__construct();


		$this->load->database();
	}
    public function obtenerTodosLosAlumnos()
    {

        return $this->db->query(" SELECT idUsuarios , rutUsuario, nombres, apellidos FROM usuarios WHERE rol = '3';" );
         
    }
    public function ingresarFormularioSociodemografico($valores)
    {
        
         $carrera = ""; 	
         $genero = ""; 	
         $edad = 0; 	
         $nacionalidad = ""; 	
         $carreraPrimeraOpcion = ""; 	
         $convivencia = ""; 	
         $tiempoDeTrasladoHastaLaEscuela = ""; 	
         $carreraDeProcedencia = ""; 	
         $razonParaElegir = ""; 	
         $condicionMental = ""; 	
         $beneficioDeGratuidad = ""; 	
         
        
        /**CARRERA  */
        if($valores["formSocio_carreraActual"] == "ingCivilInf")
        {
            $carrera="Ingeniería Civil en Informática";
        }
        elseif($valores["formSocio_carreraActual"] == "ingInf")
        {
            $carrera="Ingeniería en Informática";
        }
        elseif($valores["formSocio_carreraActual"] == "ingCivilCiencia")
        {
            $carrera="Ingeniería Civil en Ciencia de Datos";
        }

        /**GENERO */
         if( $valores["formSocio_genero"] == "femenino" )
         {
            $genero="Femenino";
         }
         elseif( $valores["formSocio_genero"] == "masculino" )
         {
            $genero="Masculino";
         }
         elseif( $valores["formSocio_genero"] == "noResonder" )
         {
            $genero="Prefiero no responder";
         }
         /**EDAD */

         $edad = $valores["formSocio_edad"];

         /**NACIONALIDAD */
         $nacionalidad = $valores["formSocio_nacionalidad"];




        /**CARRERA PRIMERA OPCION */
         if( $valores["formSocio_carreraPrimeraOpcionSiNo"] == "Si" )
         {
            $carreraPrimeraOpcion = "Si";
         }
         elseif( $valores["formSocio_carreraPrimeraOpcionSiNo"] == "No" )
         {
            $carreraPrimeraOpcion = $valores["formSocio_carreraPrimeraOpcion"];

         }

         /** CONVIVENCIA*/
        if($valores["formSocio_convivencia"] == "familia")
        {
            $convivencia="Con mi familia";
        }
        elseif($valores["formSocio_convivencia"] == "pension")
        {
            $convivencia="Pensión";
        }
        elseif($valores["formSocio_convivencia"] == "pareja")
        {
            $convivencia="Pareja";
        }
        elseif($valores["formSocio_convivencia"] == "solo")
        {
            $convivencia="Soltero(a)";
        }

        /**tiempoDeTrasladoHastaLaEscuela */
        if($valores["formSocio_trayecto"] == "menos30")
        {
            $tiempoDeTrasladoHastaLaEscuela="Menos de 30 minutos";
        }
        elseif($valores["formSocio_trayecto"] == "igual30")
        {
            $tiempoDeTrasladoHastaLaEscuela="30 minutos";
        }
        elseif($valores["formSocio_trayecto"] == "mas30")
        {
            $tiempoDeTrasladoHastaLaEscuela="Más de 30 minutos";
        }
        elseif($valores["formSocio_trayecto"] == "masHora")
        {
            $tiempoDeTrasladoHastaLaEscuela="Más de una hora";
        }

        /**carreraDeProcedencia */
         if( $valores["formSocio_carreraDePrecedenciaSiNo"] == "Si" )
         {
            $carreraDeProcedencia = $valores["formSocio_carreraDePrecedenciaIngresar"];
         }
         elseif( $valores["formSocio_carreraDePrecedenciaSiNo"] == "No" )
         {
            $carreraDeProcedencia = "No";
         }



         /**razonParaElegir */
        if($valores["formSocio_razonParaElegirLaCarreraActual"] == "eleccionLibre")
        {
            $razonParaElegir="Fue elección libre";
        }
        elseif($valores["formSocio_razonParaElegirLaCarreraActual"] == "primeraPreferencia")
        {
            $razonParaElegir="Fue primera preferencia";
        }
        elseif($valores["formSocio_razonParaElegirLaCarreraActual"] == "tradicionFamiliar")
        {
            $razonParaElegir="Es una tradición familiar";
        }
        elseif($valores["formSocio_razonParaElegirLaCarreraActual"] == "descarte")
        {
            $razonParaElegir="Por descarte";
        }
        elseif($valores["formSocio_razonParaElegirLaCarreraActual"] == "otroMotivo")
        {
            $razonParaElegir=$valores["formSocio_razonParaElegirLaCarreraActualIngresarMotivo"];
        }


/**condicionMental, */
        if($valores["formSocio_condicionMentalDiagnosticadaSiNoNose"] == "Si")
        {
            $condicionMental = $valores["formSocio_condicionMentalDiagnosticadaSiNoNose"];
        }
        elseif($valores["formSocio_condicionMentalDiagnosticadaSiNoNose"] == "No")
        {
            $condicionMental = "No";
        }
        elseif($valores["formSocio_condicionMentalDiagnosticadaSiNoNose"] == "Nose")
        {
            $condicionMental = "No estoy seguro";
        }


        /**beneficioDeGratuidad */


        if($valores["formSocio_beneficioGratuidadSiNo"] == "Si")
        {
            $beneficioDeGratuidad = "Si";
        }
        elseif($valores["formSocio_beneficioGratuidadSiNo"] == "No")
        {
            $beneficioDeGratuidad = "No";
        }



        $values="'".$carrera."',".
                "'".$genero."',".
                "'".$edad."',".
                "'".$nacionalidad."',".
                "'".$carreraPrimeraOpcion."',".
                "'".$convivencia."',".
                "'".$tiempoDeTrasladoHastaLaEscuela."',".
                "'".$carreraDeProcedencia."',".
                "'".$razonParaElegir."',".
                "'".$condicionMental."',".
                "'".$beneficioDeGratuidad;

        $consultaFormulario=' INSERT INTO formulario_sociodemografico(  carrera,
                                                                        genero,
                                                                        edad,
                                                                        nacionalidad,
                                                                        carreraPrimeraOpcion,
                                                                        convivencia,
                                                                        tiempoDeTrasladoHastaLaEscuela,
                                                                        carreraDeProcedencia,
                                                                        razonParaElegir,
                                                                        condicionMental,
                                                                        beneficioDeGratuidad ) VALUES('.$values.');';
        $this->db->query($consultaFormulario);


        $consultaUsuario='INSERT INTO usuarios(id_prueba 	) VALUES('.
        $valores["formSocio_rut"].');';

        $this->db->query($consultaUsuario);

    }

    

}