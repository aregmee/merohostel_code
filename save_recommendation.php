<?php

include 'DBConnection.php';

// EDIT THE 2 LINES BELOW AS REQUIRED

$email_to = "merohostel@gmail.com";

$email_subject = "Get Recommendation - Query";





function died($error) {

    // your error code can go here

    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

    echo "These errors appear below.<br /><br />";

    echo $error."<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();

}



// validation expected data exists

if(!isset($_POST['name']) ||

    !isset($_POST['emailAddress']) ||

    !isset($_POST['contactNo']) ||

    !isset($_POST['gender']) ||

    !isset($_POST['location']) ||

    !isset($_POST['course']) ||

    !isset($_POST['rtype']) ||

    !isset($_POST['duration'])) {

    died('We are sorry, but there appears to be a problem with the form you submitted.');

}


$name = $_POST['name']; // required

$emailAddress = $_POST['emailAddress']; // required

$contactNo = $_POST['contactNo']; // required

$gender = $_POST['gender']; // not required

$location = $_POST['location']; // required

$course = $_POST['course']; // required

$roomType = $_POST['rtype']; // required

$duration = $_POST['duration']; // required



function comment(){

/*$error_message = "";

$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$emailAddress)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

}

$string_exp = "/^[A-Za-z .'-]+$/";

if(!preg_match($string_exp,$name)) {

    $error_message .= 'The Name you entered does not appear to be valid.<br />';

}

if(strlen($error_message) > 0) {

    died($error_message);

}*/

/*$email_message = "Form details below.\n\n";


function clean_string($string) {


    $bad = array("content-type","bcc:","to:","cc:","href");

    return str_replace($bad,"",$string);

}



$email_message .= "Name: ".clean_string($name)."\n";

$email_message .= "Contact Number: ".clean_string($contactNo)."\n";

$email_message .= "Email: ".clean_string($emailAddress)."\n";

$email_message .= "Gender: ".clean_string($gender)."\n";

$email_message .= "Location: ".clean_string($location)."\n";

$email_message .= "Course: ".clean_string($course)."\n";

$email_message .= "Room Type: ".clean_string($roomType)."\n";

$email_message .= "Duration: ".clean_string($duration)."\n";



require_once('phpMailer/class.phpmailer.php');

require_once("phpMailer/class.smtp.php");

require 'phpMailer/PHPMailerAutoload.php';

$mailer = new PHPMailer();

$mailer->IsSMTP();

$mailer->SMTPSecure = 'tls';

$mailer->Host = 'smtp.gmail.com';

$mailer->Port = 587;

$mailer->Username = $email_to;

$mailer->Password = 'MeroHostel123!';

$mailer->SMTPAuth = true;

$mailer->From = $emailAddress;

$mailer->FromName = $name;

$mailer->addReplyTo($emailAddress,$name);

$mailer->Subject = $email_subject;

$mailer->Body = $email_message;

$mailer->ClearAddresses();

$mailer->AddAddress($email_to);

if($mailer->Send()) {

    echo 'Thank you for contacting us. We will be in touch with you very soon.';
}*/
}

$receivedDate= date("Y/m/d");


$recommendationQuery="insert into recommendation(Name ,contactNumber,emailAddress,Gender,Location,Course,Duration,roomType,receivedDate)

 VALUES('$name','$contactNo','$emailAddress','$gender','$location','$course','$duration','$roomType','$receivedDate') ";


if(mysqli_query($conn, $recommendationQuery)){

    echo "Data Successfully inserted";

}




?>



    <!-- include your own success html here -->






<?php


?>