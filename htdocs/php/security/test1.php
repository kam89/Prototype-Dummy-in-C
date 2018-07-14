<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'stringEncrypt.php';

$data='12345';

function newline() {
    echo '<br>';
}

$string = new stringEncrypt($data);

//print_r(allCipher());
//newline();
//echo getCipherIVLen($string->getMethod());
//newline();

//show the string to be encrypted
echo '1.0:' . $string->data;
newline();

//call encrypt function
echo '1.1:' . $string->encrypt();
newline();

/*
echo $string->encode($string->data);
newline();
*/

echo 'tag:' . $string->tag;
newline();

//pass the encoded string to be decoded and decrypted.
echo '2.0:' . $string->data=$string->finalmsg;
newline();

echo $string->decode($string->data);
newline();

//call decrypt function
echo '2.2:' . $string->decrypt();
newline();

?>