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