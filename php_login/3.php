<?php 
	require "core.inc.php";
	require "connect.inc.php";

	$count = 0;

	//echo $_SESSION['user_id'];
	$patient = $_SESSION['user_id'];
	$data = json_decode(file_get_contents("php://input"));
	$disease_name = $data->angular_var1;
	//echo $disease_name;
	$doctor_name = array();

	//$patient = "dsesf";
	//$doctor_name = "sd";
	//$disease_name = "sawdqw";

	$query1 = "select email from doctor where name = 'Kaustubh'";
		if($query_run1 = $mysqli->query($query1)){	
			while($row = mysqli_fetch_array($query_run1)){
				array_push($doctor_name, $row["email"]);
				//array_push($medicine, $row["medicines"]);
			}
			//echo $doctor_name[0];
			echo "$count $patient $doctor_name[0] $disease_name";

			//$query2 = "insert into treatment values(".$count.",'".$patient."','".$doctor_name."','".$disease_name."',0,0,0)";
			$query2 = "insert into treatment values(".$count.",'".$patient."','".$doctor_name[0]."','".$disease_name."',0,0,0)";
			if($mysqli->query($query2)){	
				echo "inserted";
			}
			else{
				echo "cnt";
			}
		}
		else{
			echo "cant";
		}
		

 ?>