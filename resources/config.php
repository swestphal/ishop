<?php
//output buffering on
ob_start();

session_start();

//define db params

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","root");
define("DB_NAME","dev_ishop");

define("ROOT_PATH","/");
define("ROOT_URL","devishop/public/");

define("DS","/");
define("TEMPLATE_BACK","../resources/templates/back/");
define("TEMPLATE_FRONT","../resources/templates/front/");

echo TEMPLATE_FRONT;
echo TEMPLATE_BACK;
require_once ("functions.php");


// new database connection

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

