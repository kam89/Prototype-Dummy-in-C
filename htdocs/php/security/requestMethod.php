<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * This class is to map input to $_POST or $_GET
 */

require_once 'dataSecValidation.php';

class requestMethod {
    var $input;
    
    function __construct($data) {
        $this->input = $data;
    }
        
    function post() {  
        $validate = new dataSecValidation($_POST[$this->input]);
        return $_POST[$this->input] = $validate->Validate();
        //return $_POST[$this->input];
    }
    
    function get() {
        return $_GET[$this->input];
    }
    
}
?>
