<?php
// Include connection
include 'connection.php';

session_start();

$user = ''.$_SESSION["userid"].'';
$username = $_POST['username'];
$userpass = $_POST['password'];
$useremail = $_POST['email'];
$userphone = $_POST['phone'];



$sql = "UPDATE `customer` SET `CUST_NAME`='$username', `CUST_PASSWORD`='$userpass', `CUST_EMAIL`='$useremail', `CUST_PHONE`='$userphone' WHERE `CUST_ID`='$user'";

$result = mysqli_query($dbc, $sql);

if($result)
{
	print '<script> alert("User profile updated successfully! Please re-login."); window.location.assign("userLogout.php"); </script>';
}
else
{
    echo "Error updating record: " . mysqli_error($dbc);
}

mysqli_close($dbc);

?> 
