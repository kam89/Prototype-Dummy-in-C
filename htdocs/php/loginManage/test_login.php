<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../sysPath.php';
require_once __PHP__.'/security/requestMethod.php';
require_once 'loginManage.php';

//pass the textbox with name="txt_id" from test_login.php to $_POST[]
$request = new requestMethod("txt_id");
$loginid = $request->post();

//pass the textbox with name="txt_pass" from test_login.php to $_POST[]
$request = new requestMethod("txt_pass");
$password = $request->post();

$login = new loginManage($loginid, $password);
echo $login->loginidValidate();

?>