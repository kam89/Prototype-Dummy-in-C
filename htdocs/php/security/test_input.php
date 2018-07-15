<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'requestMethod.php';

//pass the textbox with name="name" from test_input.php to $_POST[]
$request = new requestMethod("name");
$name = $request->post();
//$name = $request->get();

require_once 'stringEncrypt.php';

$encrypt = new stringEncrypt($name);

echo $name;
echo "<br>";
echo $encrypt->encrypt();
echo "<br>";
?>
