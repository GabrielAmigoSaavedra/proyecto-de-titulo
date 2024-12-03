<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require_once("Administrador_controller.php");
class PruebaIngreso_controller extends CI_Controller 
{
    public function __construct()
    {
        
        parent::__construct();

		$this->load->helper(array('autenticaciones/reglasIngresoNuevoUsuario'));


    }

    public function index()
    {
        		$this->load->view('pruebaIngreso_view');

    }
    public function ingresarUsuario()
    {
        $reglasDeValidacion	=	getReglasDeNuevoUsuario();
        

        //$this->form_validation->set_rules('ingresarUsuario', 'name','regex_match[/^(\d{1,2}(?:[\.]?\d{3}){2}-[\dkK])$/]|trim|required' );
        
        
        $this->form_validation->set_rules( $reglasDeValidacion);
            

        if(	 $this->form_validation->run() === FALSE)
		{
			$this->output->set_status_header( 400 );

            echo json_encode( array(
                            'mensajeError' => form_error('rutUsuario')
                        )
                );
        }
        else
        {

            $rut=$this->input->post("ingresarUsuario");

            if(isset( $rut ) )
            {
                echo json_encode($rut);

            }
        }
    }


}