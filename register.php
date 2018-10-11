<?php
	require "connect.inc.php";

	$n;

	$data = json_decode(file_get_contents("php://input"));
	$var1 = $data->angular_var1;
	$var2 = $data->angular_var2;

$query_test = "select d_id from district where d_name = '".$data->angular_var2."' and s_id = '".$data->angular_var1."'"; 

if($query_run1 = $mysqli->query($query_test)){
	$row = mysqli_fetch_array($query_run1);
	//echo $row[0];
	//$d_id = $row[0];
	$n = $row['d_id'];
	//echo $row['d_id'];
	//$row = mysqli_fetch($query_run);
	//echo $query_run;
}

//echo $var1;
	//include "id.php"
		//$data = json_decode(file_get_contents("php://input"));
	

	 if(isset($_GET['name']) && isset($_GET['email']) &&  isset($_GET['password']) && isset($_GET['dob']) && isset($_GET['gender'])  && isset($_GET['phone'])) {
	 	//$d_id = ;

	 	echo $n;

		$name = $_GET['name'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$dob = $_GET['dob'];
		$gender = $_GET['gender'];
		$address = 1;
		$phone= (int)$_GET['phone'];
		//echo $_GET['district'];
		// $disname=$data->angular_var2;
		// $s_id=$data->angular_var1;
		// $query1="select d_id from district where d_name= '".$disname."' and s_id = ". $s_id ;
		// $d_id=$mysqli->query($query1);
		// echo $d_id;

		
		//echo $var1;



		//$address=1;
		echo "dqw";
		
		
		echo "$name $email $password $dob $gender $address $phone";

		//echo $d_id;

		 $query = "insert into patient values('".$name."','".$email."','".$password."','".$dob."','".$gender."',".$address.",".$phone.")";
		// $query = "insert into patient values('".$name."','".$email."','".$password."','".$dob."','".$gender."','".$address."','".$phone."')";
		if($mysqli->query($query)){	
			echo "regsitered";
		}
		else{
			echo "cant";
		}
	}
	else{
		//echo "set all the fields";
	}
	//header('Location:'.$http_referer);
 ?>
