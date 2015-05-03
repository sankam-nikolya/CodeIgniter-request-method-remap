<?php
/**
 * Request Method Controller for CodeIgniter
 *
 * If you like to keep things tidy you are most probably looking for a way to separate controller methods by HTTP Request.
 *
 * @author     federatier
**/
class MY_Controller extends CI_Controller
{
     
     /**
      * This request
      *
      * @global     object
     **/
     protected $method = NULL;
     
     /**
      * Constructor
      *
      * @return     void
     **/
     public function __construct()
     {
          parent::__construct();
        
          $this->method = $this->_detect_method();
     }
     
     /**
      * Remap
      *
      * @param      string
     **/
     public function _remap($method, $params = array())
     {
          if (method_exists($this, $method.'_'.$this->method))
            return call_user_func_array(array($this, $method.'_'.$this->method), $params);
          else if(method_exists($this, $method))
            return call_user_func_array(array($this, $method), $params);
          else
            show_404();
     }
     
     /**
      * Method being used (POST, PUT, GET, DELETE)
      *
     **/
     private function _detect_method()
     {
          $method = strtolower($this->input->server('REQUEST_METHOD'));
          if (in_array(strtolower($method), array('get', 'delete', 'post', 'put')))
               return $method;
    }
}
