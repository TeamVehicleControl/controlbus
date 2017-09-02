<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller {

	function __construct() {
        ob_start();
        parent::__construct();
        $this->output->set_header(CHARSET_ISO_8859_1);
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        if (! isset($_COOKIE[__getCookieName()])) {
            header("Location: ".RUTA_VEHIKMANT, true, 301);
            //redirect(RUTA_VEHIKMANT, 'location');
        }
    }
    
	public function index()
	{
	    $data['nombre_completo'] = _getSesion("nombre_abvr");
	    if(_getSesion("usuario") == null && _getSesion("password") == null) {
	        header("Location: ".RUTA_VEHIKMANT, true, 301);
	    }
	    if(_getSesion("direccion") != _getSesion("roles")) {
	        header("Location: ".RUTA_VEHIKMANT, true, 301);
	    }
	    $data['rol'] = _getSesion("roles");
		$this->load->view('v_main', $data);
	}
	
	function logout() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $data['url'] = RUTA_VEHIKMANT;
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
	        $data['urlAlertas'] = RUTA_VEHIKMANT.'c_alertas';
// 	        _log(print_r($data['urlAlertas'], true));
	        $data['error'] = EXIT_SUCCESS;
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
	
// 	function buildTablaDocFechaLow(/*$datos*/) {
// 	    $tmpl = array('table_open'  => '<table data-toggle="table" class="table borderless" data-toolbar="#custom-toolbar"
// 			                                   data-pagination="true" data-page-list="[5, 10, 15, 20, 25, 30, 35, 40, 45, 50]"
// 			                                   data-show-columns="false" data-search="false" id="tb_conta">',
// 	        'table_close' => '</table>');
// 	    $this->table->set_template($tmpl);
// 	    $head_1 = array('data' => 'Fecha'                   , 'class' => 'text-center');
// 	    $head_2 = array('data' => 'Docente'                 , 'class' => 'text-center');
// 	    $head_3 = array('data' => 'Sede docente'            , 'class' => 'text-center');
// 	    $head_4 = array('data' => 'Evaluador'               , 'class' => 'text-center');
// 	    $head_5 = array('data' => 'Tipo visita'             , 'class' => 'text-center');
// 	    $head_6 = array('data' => 'Horario'   , 'class' => 'text-center');
// 	    $this->table->set_heading($head_1, $head_2, $head_3, $head_4, $head_5, $head_6);
// 	    $val = 1;
// // 	    foreach ($datos as $row) {
// 	        $row_cell_1 = array('data' => /*$row['docente']*/'Motor'       , 'class' => 'text-center');
// 	        $row_cell_2 = array('data' => $row['docente']       , 'class' => 'text-center');
// 	        $row_cell_3 = array('data' => $row['sede']          , 'class' => 'text-center');
// 	        $row_cell_4 = array('data' => $row['evaluador']     , 'class' => 'text-center');
// 	        $row_cell_5 = array('data' => $row['tipo_visita']   , 'class' => 'text-center');
// 	        $row_cell_6 = array('data' => $row['horario']       , 'class' => 'text-center');
// 	        $val++;
// 	        $this->table->add_row($row_cell_1, $row_cell_2, $row_cell_3, $row_cell_4, $row_cell_5, $row_cell_6);
// // 	    }
// 	    $tabla = $this->table->generate();
// 	    return $tabla;
// 	}

	function verMapa() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $empresa= _post('empresa');
	        $this->session->set_userdata(array('empresa'=> $empresa));
	        $data['ubicacion'] = RUTA_VEHIKMANT.'c_ubicacion';
	        $data['error'] = EXIT_SUCCESS;
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
}
