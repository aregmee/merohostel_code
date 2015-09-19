<?php

$inquiry_submitted = "false";
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["contact"];
$hostel_name = $_POST["hostel_name"];
$hostel_id = $_POST["hostel_id"];
$preference = $_POST["rtype"];
$message = $_POST["message"];

include 'DBConnection.php';

if(isset($phone) && isset($name) && isset($hostel_id) && isset($preference) || isset($email) ){
	$query = "INSERT INTO inquiries values (null, '$name', '$email', '$phone', '$hostel_name', $hostel_id, '$preference', '$message')";

	if(strlen($phone) == 10){
		if(mysqli_query($conn, $query))
			$inquiry_submitted = "true";
		else
			$inquiry_submitted = "false";
	}
	
	echo $inquiry_submitted;
}else{

	echo "false";
}