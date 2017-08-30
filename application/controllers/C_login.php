<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

     function __construct() {
         parent::__construct();
         $this->output->set_header(CHARSET_ISO_8859_1);
         $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
         $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
         $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
         $this->output->set_header('Pragma: no-cache');
         $this->load->model('mf_usuario/m_usuario');
         $this->load->helper('cookie');
     }
    
	public function index()
	{
	    $cookie_name  = "user";
	    $cookie_name1 = "pass";
	    $cookie_name2 = "check";
	    $logeoUsario = _getSesion('usuario');
	    $logeoUsario = null;
	    if($logeoUsario == null) {
    	    if(isset($_COOKIE[$cookie_name2])) {
    	        $usuario  = _simple_decrypt($_COOKIE[$cookie_name]);
    	        $password = _simple_decrypt($_COOKIE[$cookie_name1]);
    	        $check    = $_COOKIE[$cookie_name2];
    	        
    	        $data['usuarioLogin']  = $usuario;
    	        $data['passwordLogin'] = $password;
    	        $data['checkLogin']    = $check;
    	    }
    		$this->load->view('v_login');
	    } else {
	        Redirect('/c_main');
	    }
	}
	
	function logear() {
	    $data['error'] = EXIT_ERROR;
	    try{
	        $user        = __getTextValue('user');
	        $password    = json_decode(__getTextValue('pass'));
	        $remember    = json_decode(_post('check'));
    	    $check       = null;
    	    $nombre      = null;
    	    $nombreComp  = null;
    	    $rol         = null;
    	    ($remember == '0' ? $check = '0' : $check = '1');
    	    if($user == null && $password == null) {
    	        $data['error'] = '<p style="font-size: 12px;color:#f44336;margin-right:-8px">
            				          <label style="float:left">Ingrese usuario y/o contrase&ntilde;a</label>
            				      </p>';
    	        $data['sw'] = 1;
    	    } else if($password == null) {
    	        $data['error']    = '<p style="font-size: 12px;color:#f44336;margin-right:-8px">
            				             <label style="float:left">Una contrase&ntilde;a es requerida</label>
            				         </p>';
    	        $data['sw'] = 2;
    	    } else if($user == 'jhiberico' && $password == '123' || $user == 'jminaya' && $password == '123' || $user == 'jsulca' && $password == '123'){
    	       //$ingreso = $this->M_usuario->getIngreso((trim($user)), $password);
    	        if($user == 'jhiberico' && $password == '123') {
    	            $nombre     = 'Jhonatan Iberico';
    	            $rol        = 'Anexo';
    	            $nombreComp = 'Jhonatan Iberico Mesia';
    	        }else if($user == 'jminaya' && $password == '123') {
    	            $nombre     = 'José Minaya';
    	            $nombreComp = 'Jose L. Minaya C.';
    	            $rol        = 'Usuario';
    	        }else if($user == 'jsulca' && $password == '123') {
    	            $nombre     = 'Julio Sullca';
    	            $nombreComp = 'Julio C. Sullca';
    	            $rol        = 'Concesionaria';
    	        }
    	        $this->session->set_userdata(array('usuario'           => 'jhiberico',//PARA EL MANEJO DE DATOS
    	                                           'password'          => _encodeCI('123'),
    	                                           'nombre_abvr'       => $nombre,
    	                                           'nombre_completo'   => $nombreComp,
    	                            	           'flg_clave'         => 1,
    	                                           'roles'             => $rol));
    	        //_log($ingreso);
    	        $data['url'] = 'http://localhost:8080/controlbus/C_main';
    	        $data['remember'] = $check;
    	        $data['error'] = EXIT_SUCCESS;
    	    }else if($user != 'jhiberico' && $password != '123' || $user != 'jminaya' && $password != '123' || $user != 'jsulca' && $password != '123') {
    	        return;
    	    }
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
}