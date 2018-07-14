<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'security/requestMethod.php';

//pass the textbox with name="name" to $_POST[]
$name = new requestMethod("name");
$name->post();
echo $name->post();
?>