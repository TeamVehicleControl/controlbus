<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller {
	public function index()
	{
	    //_log(_getSesion("usuario"));
	    $this->session->set_userdata(array('direccion'=> 'Usuario'));
		$this->load->view('v_login_usuario');
	}
}
