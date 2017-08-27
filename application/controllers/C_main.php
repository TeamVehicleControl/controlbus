<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    //_log(_getSesion("usuario"));
		$this->load->view('v_main');
	}
	
	function logout() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $data['url'] = 'http://localhost:8080/controlbus';
	        $data['error'] = EXIT_SUCCESS;
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
	
	function generarPalabras() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $frases = array(
	            1 => "Ruedas",
	            2 => "Dirección",
	            3 => "Suspención",
	            4 => "Frenos",
	            5 => "Transmisión",
	            6 => "Sistema de inyección",
	            7 => "Sistema de refrigeración",
	            8 => "Seguridad",
	            9 => "Encendido",
	            10 => "Escape",
	        );
	        
	        $numero = rand (1,10);
	        $data['palabras'] = $frases[$numero];
	        $data['error'] = EXIT_SUCCESS;
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
	
	function gotoAlertas() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $data['urlAlertas'] = 'http://localhost:8080/controlbus/c_alertas';
	        _log(print_r($data['urlAlertas'], true));
	        $data['error'] = EXIT_SUCCESS;
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
}
