<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ubicacion extends CI_Controller {
    
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
        $data['empresa'] = _getSesion("empresa");
        $this->load->view('v_ubicacion', $data);
    }

    function generarUbicaciones() {
        $data['error'] = EXIT_ERROR;
        try{
            $empresa = _getSesion("empresa");
            if($empresa == EMPRESA_MERCEDES) {
                $data['ubicacion'] = 'Parque kennedy, Lima';
            }else if($empresa == EMPRESA_KIA)  {
                $data['ubicacion'] = 'Plaza norte, Lima';
            }else if($empresa == EMPRESA_SUSUKI)  {
                $data['ubicacion'] = 'Plaza bolognesi, Lima';
            }else if($empresa == EMPRESA_VOLVO)  {
                $data['ubicacion'] = 'Parque de la amistad, Lima';
            }
            $data['error'] = EXIT_SUCCESS;
        }  catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode(array_map('utf8_encode', $data));
    }
}
