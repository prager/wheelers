<?php
class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }    
    
    
    public function register() {
        $retval = TRUE;
        
        return $retval;
    }
}

?>