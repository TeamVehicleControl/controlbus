 <?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('_post')) {
    /**
     * @author jhonatan iberico
     */
    function _post($postIndex) {
        $CI =& get_instance();
        return $CI->input->post($postIndex);
    }
}

if(!function_exists('_log')) {
    function _log($var) {
        $CI =& get_instance();
        $clase = $CI->router->fetch_class();
        $metodo = $CI->router->fetch_method();
        log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$var);
    }
}

if(!function_exists('_logLastQuery')) {
    /**
     * Valida si es entero
     * @param $input - valor a evaluar
     * @return bool true / false
     */
    function _logLastQuery($marca = null){
        $CI =& get_instance();
        $clase = $CI->router->fetch_class();
        $metodo = $CI->router->fetch_method();
        log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$marca.' - '.$CI->db->last_query());
    }
}

 if(!function_exists('_decodeCI')) {
     /**
      * Desencripta usando codeigniter decode
      * @author jhonatan iberico
      * @since 02/08/2017
      * @param $toDecrypt variable que sera desencriptada
      * @return variable desencriptada
      */
     function _decodeCI($toDecrypt) {
         $CI =& get_instance();
         return $CI->encrypt->decode($toDecrypt);
     }
 }
 
 if(!function_exists('_encodeCI')) {
     /**
      * Encripta usando codeigniter encode
      * @author jhonatan iberico
      * @since 02/08/2017
      * @param $toEncrypt variable que sera encriptada
      * @return variable encriptada
      */
     function _encodeCI($toEncrypt) {
         $CI =& get_instance();
         return $CI->encrypt->encode($toEncrypt);
     }
 }

