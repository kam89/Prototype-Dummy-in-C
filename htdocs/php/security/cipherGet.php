<?php
/* 
 * Copy from below:
 * http://php.net/manual/en/function.openssl-get-cipher-methods.php
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cipherGet($arraypos) {

    $ciphers              = openssl_get_cipher_methods();
    $ciphers_and_aliases  = openssl_get_cipher_methods(true);
    $cipher_aliases       = array_diff($ciphers_and_aliases, $ciphers);

    //ECB mode should be avoided
    $ciphers = array_filter( $ciphers, function($n) { return stripos($n,"ecb")===FALSE; } );

    //At least as early as Aug 2016, Openssl declared the following weak: RC2, RC4, DES, 3DES, MD5 based
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"des")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc2")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc4")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"md5")===FALSE; } );
    $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"des")===FALSE; } );
    $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"rc2")===FALSE; } );
    
    //print_r($ciphers);
    //print_r($ciphers[$arraypos]);

    return $ciphers[$arraypos];
}


//For Troubleshoot only
function allCipher() {

    $ciphers              = openssl_get_cipher_methods();
    $ciphers_and_aliases  = openssl_get_cipher_methods(true);
    $cipher_aliases       = array_diff($ciphers_and_aliases, $ciphers);

    //ECB mode should be avoided
    $ciphers = array_filter( $ciphers, function($n) { return stripos($n,"ecb")===FALSE; } );

    //At least as early as Aug 2016, Openssl declared the following weak: RC2, RC4, DES, 3DES, MD5 based
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"des")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc2")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"rc4")===FALSE; } );
    $ciphers = array_filter( $ciphers, function($c) { return stripos($c,"md5")===FALSE; } );
    $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"des")===FALSE; } );
    $cipher_aliases = array_filter($cipher_aliases,function($c) { return stripos($c,"rc2")===FALSE; } );
    
    //print_r($ciphers);
    //print_r($ciphers[$arraypos]);

    return $ciphers;
}

function getCipherIVLen($method) {
	$ivlen = openssl_cipher_iv_length($method);
	return $ivlen;
}

?>