<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$data = json_decode(file_get_contents("php://input"));
	$disease_name = $data->angular_var1;
	$patient_name = $data->angular_var2;
	$prog1 = $data->angular_var3;
	$prog2 = $data->angular_var4;
	$prog3 = $data->angular_var5;

	$query = "update treatment set progress1 = '".$prog1."',progress2 = '".$prog2."',progress3 = '".$prog3."' where patient_email = '".$patient_name."'";
	if($query_run1 = $mysqli->query($query))
	{
		echo "run";
	}
	else{
		echo "not";
	}


 ?>