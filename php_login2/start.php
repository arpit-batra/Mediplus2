<?php 
	
	require "core.inc.php";
	require "connect.inc.php";
	//"../index2.html";
	//header('Location:../index2.html');

	if(logged_in()){
		echo "you are logged in";
		echo "<a href=\"log_out.php\">log out</a>";
		//echo $current_file = $_SERVER['SCRIPT_NAME'];
		//header('Location:../index2.html');
	}

	else{
		//echo "no";
		//echo $variable = 0;
		include "login.php";

	}
	//echo $current_file;
 ?>