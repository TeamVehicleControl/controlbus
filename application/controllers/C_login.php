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
         $this->load->model('m_utils');
     }
    
	public function index()
	{
		$this->load->view('v_login');
	}
	
	function logear() {
	    $data['error'] = EXIT_ERROR;
	    try{
    	    $user        = utf8_decode(_post('user'));
    	    $password    = utf8_decode(_post('pass'));
    	    $remember    = $this->input->post('check');
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
    	    } else {
    	        $ingreso = $this->m_usuario->getIngreso((trim($user)), $password);
    	        if($ingreso['personal'] == 1) {
    	            $varia = $this->m_usuario->getUsuarioLogin((trim($user)), $password);
    	            if($varia != null) {
    	                $data['err'] = EXIT_SUCCESS;
    	                $roles = $this->m_usuario->getRolesByuser($varia['nid_persona']);
    	                $dataUser = array("usuario"           => $varia['usuario'],//PARA EL MANEJO DE DATOS
                    	                   "usuarioMenu"       => __getDescReduce($varia['usuario'],20),//PARA EL MENU
                    	                   "nid_persona"       => $varia['nid_persona'],
                    	                   "nombre_abvr"       => $varia['nombre_abvr'],
                    	                   "id_sede_trabajo"   => $varia['id_sede_control'],
                    	                   "font_size"         => ($varia['font_size'] != null ) ? $varia['font_size'] : null,
                    	                   "nombre_completo"   => $varia['nom_persona'].' '.$varia['ape_pate_pers'].' '.$varia['ape_mate_pers'],
                    	                   "foto_usuario"      => $varia['foto_persona'],
                    	                   'flg_cambiar_clave' => $varia['flg_cambiar_clave'],
                    	                   'flg_clave'         => $ingreso['flg_clave'],
                    	                   "roles"             => $roles
                    	                  );
    	                if($remember == '1') {
    	                    $password     = _simple_encrypt($password);
    	                    $user         = _simple_encrypt($user);
    	                    $cookie_name  = "user";
    	                    $cookie_value = $user;
    	                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    	                    $cookie_name1  = "pass";
    	                    $cookie_value1 = $password;
    	                    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
    	                    $cookie_name2  = "check";
    	                    $cookie_value2 = "checked";
    	                    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    	                } else {
    	                    $cookie_name  = "user";
    	                    $cookie_value = "";
    	                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    	                    $cookie_name1  = "pass";
    	                    $cookie_value1 = "";
    	                    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
    	                    $cookie_name2  = "check";
    	                    $cookie_value2 = "";
    	                    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    	                }
    	                $this->session->set_userdata($dataUser);
    	                $data['url'] = base_url().'c_main';
    	            } else {
    	                $data['error'] = '<p style="font-size: 12px;color:#f44336;margin-right:-8px;float:left">
                				              <a data-toggle="modal" href="#modalCorreo" onclick="openModalCorreo()">&iquest;Olvidaste tu contrase&ntilde;a?</a>
                				          </p>';
    	            }
    	        }
    	    }
	    }  catch(Exception $e){
	        $data['msj'] = $e->getMessage();
	    }
	    echo json_encode(array_map('utf8_encode', $data));
	}
}