<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * This class is to validate the input data 
 */

class dataSecValidation {
    var $input;
    var $output;
    function __construct($data) {
        $this->input = $data;
    }
    
    function Validate() {
        $this->input = trim($this->input);
        $this->input = stripslashes($this->input);
        $this->input = htmlspecialchars($this->input);
        return $this->output = $this->input;
    }
    
}
?>