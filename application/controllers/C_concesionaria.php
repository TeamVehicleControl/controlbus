<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_concesionaria extends CI_Controller {
	public function index()
	{
	    //_log(_getSesion("usuario"));
	    $this->session->set_userdata(array('direccion'=> 'Concesionaria'));
		$this->load->view('v_login_proveedor');
	}
}
