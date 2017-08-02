<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

//     function __construct() {
//         parent::__construct();
        
//     }
    
	public function index()
	{
		$this->load->view('v_login');
	}
	
	function redirectMenu() {
	    $usuario  = _post('usuario');
	    $password = _post('password');
	    _log($password);
	    /*if($usuario == null || $password == null){
	        redirect('C_login','refresh');
	        //throw new Exception('no');
	    }
	    $this->session->set_userdata(array('usuario' => $usuario));
	    //$this->session->set_userdata(array('year_prog' => $anio));
	    redirect('C_menu','refresh');*/
	}
	
// 	function loginUser() {
// 	    _log("entra ");
// 	    $data['error'] = EXIT_ERROR;
// 	    $data['msj'] = MSJ_ERROR;
// 	    $user = _post("user");
// 	    $pass = _post("pass");
// 	    _log("user: ".$user);
// 	    _log("pass: ".$pass);
// // 	    try{
	        
// // 	    } catch (Exception $e) {
// //         $data['msj'] = $e->getMessage();
// //         }
// 	}
}