<?php 
require "connect.inc.php";
$var1;
$var2;

$data = json_decode(file_get_contents("php://input"));
$var1 = $data->angular_var1;
$var2 = $data->angular_var2;

//echo $var2;
 ?>