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

 if(!function_exists('__getDescReduce')) {
     function __getDescReduce($desc, $length) {
         $lenghDesc  = strlen($desc);
         if($lenghDesc > $length) {
             $desc1 = substr($desc, - ($lenghDesc), $length);
             $desc  = $desc1."..";
         }
         return $desc;
     }
 }
 
 if(!function_exists('_simpleEncrypt')) {
     /**
      * Desencripta usando mcrypt_encrypt
      * @author jiberico
      * @param $toDecrypt variable que sera desencriptada
      * @return variable encriptada
      */
     function _simple_encrypt($toEncrypt) {
         return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, $toEncrypt, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));
     }
 }
 
 if(!function_exists('_simpleDecrypt')) {
     /**
      * Desencripta usando mcrypt_decrypt
      * @author jiberico
      * @param $toDecrypt variable que sera desencriptada
      * @return variable desencriptada
      */
     function _simple_decrypt($toDecrypt) {
         return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, base64_decode($toDecrypt), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
     }
 }
 
 if(!function_exists('_simpleDecryptInt')) {
     /**
      * Desencripta usando mcrypt_decrypt para integer, retorna null si no desencripto bien
      * @author jiberico
      * @param $toDecrypt variable que sera desencriptada
      * @return variable desencriptada
      */
     function _simpleDecryptInt($toDecrypt) {
         $dec = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, CLAVE_ENCRYPT, base64_decode($toDecrypt), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)));
         if(!is_numeric($dec)){
             $dec = null;
         }
         return $dec;
     }
 }