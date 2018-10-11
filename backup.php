<?php
	require "connect.inc.php";
		$data = json_decode(file_get_contents("php://input"));
			//echo $data->angular_var2;


	 if(isset($_GET['name']) && isset($_GET['email']) &&  isset($_GET['password']) && isset($_GET['dob']) && isset($_GET['gender'])  && isset($_GET['phone'])) {
		$name = $_GET['name'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$dob = $_GET['dob'];
		$gender = $_GET['gender'];
		//$address = $_GET['address'];
		
		// $s_id=$data->angular_var1;
		// $disname=$data->angular_var2;
		// $query1="select d_id from district where d_name= '".$disname."' and s_id = ". $s_id ;
		// if($mysqli->query($query1) === true)
		// 	echo "ndosghsd";
		// else
		// 	echo "no";


		//$address=1;
		$phone= (int)$_GET['phone'];
		
		//echo "$name $email $password $dob $gender $address $phone";

		$query = "insert into patient values('".$name."','".$email."','".$password."','".$dob."','".$gender."',".$address.",".$phone.")";
		if($mysqli->query($query) === true){
			//echo "regsitered";
		}
		else{
			//echo "cant";
		}
	}
	else{
		//echo "set all the fields";
	}
	header('Location:'.$http_referer);
 ?>
