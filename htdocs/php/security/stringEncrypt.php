<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'cipherGet.php';

class stringEncrypt {
    var $data;
    var $method;
    var $password;
    var $options;
    var $iv;
    var $tag;
    var $encryptedStrg;
    var $decryptedStrg;
    var $toencodeStrg;
    var $todecodeStrg;
    var $finalmsg;
    
    function __construct ($data) {
        $this->data = $data;
    }
    
    function getMethod() {
        $this->method = cipherGet(18);
        return $this->method;
    }
    
    function getOptions() {
        $this->options = 0;
        return $this->options;
    }
    
    function getPassword() {
        $this->password = "P@ssword1";
    }
    
    function getIV() {
        $this->iv = "C@nY0uGu3ss@1iV?";
    }
    
    function getTag() {
        $this->tag = "";
    }
    
    function encrypt() {
        $this->getMethod();
        $this->getPassword();
        $this->getOptions();
        $this->getIV();
        //$this->getTag();
        
        //$this->encryptedStrg = openssl_encrypt($this->data, $this->method, $this->password, $this->options, $this->iv, $this->tag);
        $this->encryptedStrg = openssl_encrypt($this->data, $this->method, $this->password, $this->options, $this->iv);
        return $this->encode($this->encryptedStrg);
        //return $this->encryptedStrg;
    }
    
    function encode($msg) {
	$this->toencodeStrg = $msg;
        $this->finalmsg = base64_encode($this->toencodeStrg);
        return $this->finalmsg;
    }
    
    function decrypt(){
        $this->getMethod();
        $this->getPassword();
        $this->getOptions();
        $this->getIV();
        //$this->getTag();
        
        //$this->decryptedStrg = openssl_decrypt($this->decode($this->data), $this->method, $this->password, $this->options, $this->iv, $this->tag);
        $this->decryptedStrg = openssl_decrypt($this->decode($this->data), $this->method, $this->password, $this->options, $this->iv);
        return $this->decryptedStrg;
    }    
	
    function decode($msg) {
            $this->todecodeStrg = $msg;
            $this->finalmsg = base64_decode($this->todecodeStrg);
            return $this->finalmsg;
    }
}
?>