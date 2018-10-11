<?php 
	require "core.inc.php";
	require "connect.inc.php";

	if(logged_in()){
		$var = 0;
	}
	else{
		$var = 1;
	}
	header('Content-Type: application/json');
	echo json_encode($var);

 ?>