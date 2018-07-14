<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
define('__HTML__', __ROOT__ . '/html');
define('__JS__', __ROOT__ . '/js');
define('__PHP__', __ROOT__ . '/php');

// Required for dbconn
require_once __PHP__ . '/dbconn/dbconfig.php';
require_once __PHP__. '/dbconn/dbConn.php';
require_once __PHP__. '/dbconn/dataArr.php';

?>

