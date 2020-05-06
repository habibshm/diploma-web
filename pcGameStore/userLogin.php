<?php

$email = $_POST['userEmail'];
$password = $_POST['userPassword'];


include 'connection.php';

$sql = "select * from customer where CUST_EMAIL = '$email' and CUST_PASSWORD = '$password'";
$result = mysqli_query($dbc, $sql)
		or die("FAILED to query database".mysqli_error());
		
		

$row = mysqli_fetch_array($result);
if ($row['CUST_EMAIL'] == $email && $row['CUST_PASSWORD'] == $password)
{
	//Start the session
	session_start();
	$_SESSION['username'] = $row['CUST_NAME'];
	$_SESSION['userid'] = $row['CUST_ID'];
	$_SESSION['userpass'] = $row['CUST_PASSWORD'];
	header ("Location: fuserHome.php");
}


else
{
	echo '<script language = "javascript"> alert("Wrong Email or Password!");
	window.location.assign("fuserLogin.php"); </script>';
}

?>