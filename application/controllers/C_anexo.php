<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_anexo extends CI_Controller {
	public function index()
	{
	    //_log(_getSesion("usuario"));
	    $this->session->set_userdata(array('direccion'=> 'Anexo'));
		$this->load->view('v_login_anexo');
	}
}
