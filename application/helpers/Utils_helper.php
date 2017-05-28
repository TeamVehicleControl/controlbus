 <?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// if(!function_exists('_post')) {
//     /**
//      * @author jhonatan iberico
//      */
//     function _post($postIndex) {
//         $CI =& get_instance();
//         return $CI->input->post($postIndex);
//     }
// }

// if(!function_exists('_log')) {
//     function _log($var) {
//         $CI =& get_instance();
//         $clase = $CI->router->fetch_class();
//         $metodo = $CI->router->fetch_method();
//         log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$var);
//     }
// }

// if(!function_exists('_logLastQuery')) {
//     /**
//      * Valida si es entero
//      * @param $input - valor a evaluar
//      * @return bool true / false
//      */
//     function _logLastQuery($marca = null){
//         $CI =& get_instance();
//         $clase = $CI->router->fetch_class();
//         $metodo = $CI->router->fetch_method();
//         log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$marca.' - '.$CI->db->last_query());
//     }
// }

