<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$doctor_name = $_SESSION['user_id'];
	//echo $doctor_name;
	$disease_name = array();
	$patient_name = array();
	$progress1 = array();
	$progress2 = array();
	$progress3 = array();
	//echo "Query starting to execute";
	$query1 = "select disease_name,patient_email,progress1,progress2,progress3 from treatment where doctor_email='".$doctor_name."'";
	if($query_run1 = $mysqli->query($query1))
	{	
		while($row = mysqli_fetch_array($query_run1))
		{
			array_push($disease_name, $row["disease_name"]);
			array_push($patient_name, $row["patient_email"]);
			array_push($progress1, $row["progress1"]);
			array_push($progress2, $row["progress2"]);
			array_push($progress3, $row["progress3"]);
			//array_push($medicine, $row["medicines"]);
			//echo "lungi dance";
		}
		//echo "Registered";
		header('Content-Type: application/json');
		echo json_encode(array($disease_name,$patient_name,$progress1,$progress2,$progress3));
	}
	else
	{
		echo "Can't";
	}
 ?>
