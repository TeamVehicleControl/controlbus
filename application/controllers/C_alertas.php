<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_alertas extends CI_Controller {
    
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
        $this->load->view('v_alertas');
    }
    
    function logout() {
        $data['error'] = EXIT_ERROR;
        try{
            $data['url'] = 'localhost:8080/controlbus';
            $data['error'] = EXIT_SUCCESS;
        }  catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode(array_map('utf8_encode', $data));
    }
}
