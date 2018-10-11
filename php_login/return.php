<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$patient = $_SESSION['user_id'];
	//echo $patient;
	$disease_name = array();
	$doctor_name = array();
	$progress1 = array();
	$progress2 = array();
	$progress3 = array();
	//echo "Query starting to execute";
	$query1 = "select disease_name,doctor_email,progress1,progress2,progress3 from treatment where patient_email='".$patient."'";
	if($query_run1 = $mysqli->query($query1))
	{	
		while($row = mysqli_fetch_array($query_run1))
		{
			array_push($disease_name, $row["disease_name"]);
			array_push($doctor_name, $row["doctor_email"]);
			array_push($progress1, $row["progress1"]);
			array_push($progress2, $row["progress2"]);
			array_push($progress3, $row["progress3"]);
			//array_push($medicine, $row["medicines"]);
		}
		//echo "Registered";
		header('Content-Type: application/json');
		echo json_encode(array($disease_name,$doctor_name,$progress1,$progress2,$progress3));
	}
	else
	{
		//echo "Can't";
	}
 ?>