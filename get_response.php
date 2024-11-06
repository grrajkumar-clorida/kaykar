<?php
//require_once("config.php");
session_start();

$whereto = "localhost";
$ak_mass = "gr8";
$akacces = "gr8@php4U";
$locations = "kaykarD10";

// Create database connection
$conn = new mysqli($whereto, $ak_mass, $akacces, $locations);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	//echo 'DB connected! <br>';
}

$captcha = $_REQUEST['captcha']; // the user's entry for the captcha code

if(isset($_POST["captcha"]) && $_POST["captcha"]!="") { //&& $_SESSION["code"]==$_POST["captcha"]

	if((isset($_POST['fname'])&& $_POST['fname'] !='') && (isset($_POST['emailid'])&& $_POST['emailid'] !=''))
	{

		$yourName = $conn->real_escape_string($_POST['fname']);
		$yourEmail = $conn->real_escape_string($_POST['emailid']);
		$yourPhone = $conn->real_escape_string($_POST['phone']);
		$subject = $conn->real_escape_string($_POST['subject']);
		$dept = $conn->real_escape_string($_POST['interstedin']);
		$comments = $conn->real_escape_string($_POST['message']);

		$sql="INSERT INTO enquiery (fname, emailid, phone, subject, dept, content) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$subject."', '".$dept."', '".$comments."')";

var_dump($sql);
		$mailBody = "
			<html>
			<head>
			    <title>Enquiery Form</title>
			</head>
			<body>
			<div style='background: linear-gradient(45deg, #4158d0, #c850c0); padding: 30px; font-family:Trebuchet MS;', align='center'>
			<table width='80%;' style='border: 2px solid #fff; border-radius: 10px; background-color: #fff; ' >
	                        
				<tr style='height: 50px; background: #36304a; font-size: 24px; color: #fff; border-radius: 10px;' >
				    <th colspan='2' align='center' valign='middle' >ENQUIRY FROM WEBSITE</th>
				</tr>
							 
				<tr style='background: #fff; font-size: 16px; color: #000;' >
					<td style='padding: 20px; font-family:Trebuchet MS;' >Name : </td>
					<td style='padding: 20px; font-family:Trebuchet MS;' >".$_REQUEST['name']."</td>
				</tr>
							 
				<tr style='background: #f5f5f5; font-size: 16px; color: #000;' >
					<td style='padding: 20px; font-family:Trebuchet MS;' >Email : </td>
					<td style='padding: 20px; font-family:Trebuchet MS;' >".$_REQUEST['email']."</td>
				</tr>

				<tr style='background: #fff; font-size: 16px; color: #000;' >
					<td style='padding: 20px; font-family:Trebuchet MS;' >Number:</td>
					<td style='padding: 20px; font-family:Trebuchet MS;' >".$_REQUEST['phone']."</td>
				</tr>
							 						 
				<tr style='background: #fff; font-size: 16px; color: #000;' >
					<td style='padding: 20px; font-family:Trebuchet MS;' >Enquiery:</td>
					<td style='padding: 20px; font-family:Trebuchet MS;' >".$_REQUEST['interstedin']."</td>
				</tr>
    						 
  				<td colspan='2' align='center' valign='middle'>&nbsp;</td>
				</tr>							 
			</table></div></body></html>";

		$to      = 'autokiteinstitute@gmail.com';
	    $subject = 'Reg:: ECM Course Enquiery | Autokite';
	    $headers = 'From: autokite@autokite.in'       . "\r\n" .
                 'Reply-To: autokite@autokite.in' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
        //$headers .= 'MIME-Version: 1.0';
		//$headers .= 'text/html; charset=iso-8859-1'         
//    	mail($to, $subject, $mailBody, $headers);

		if(!$result = $conn->query($sql)) {
			die('There was an error running the query [' . $conn->error . ']');
		} else {
			echo "Thank you! We will contact you soon";
		}
	} else {
		echo "Please fill Name and Email";
	}
} else {
	echo 'captcha issue';
}
