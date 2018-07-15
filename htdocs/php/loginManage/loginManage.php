<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../sysPath.php';

class loginManage {
    var $loginid;
    var $password;
    var $status;
    
    function __construct($loginid, $password) {
        $this->loginid = $loginid;
        $this->password = $password;
    }
    
    function loginidValidate() {
        echo $this->loginid;
        $length = strlen($this->loginid);
        echo $length;
        if ($length == 0 && $this->loginid == "") {
            return $msg = "Empty Login ID!";
        } else {
            
        }
    }
       
    function login() {
        
    }
    
    function login_success () {
        
    }
    
    function login_fail () {
        
    }

}

?>