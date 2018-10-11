<?php 
	require "core.inc.php";
	require "connect.inc.php";

	if(logged_in()){
		$var = 2;
	}
	else{
		$var = 3;
	}
	header('Content-Type: application/json');
	echo json_encode($var);

 ?>