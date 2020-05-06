<?php

// Include connection
include 'connection.php';

$devname = $_POST['DEV_NAME'];
$devemail = $_POST['DEV_EMAIL'];
$devphone = $_POST['DEV_PHONE'];
$devweb = $_POST['DEV_WEB'];
$devaddress = $_POST['DEV_ADDRESS'];


$sql = "INSERT INTO developer (DEV_ID, DEV_NAME, DEV_EMAIL, DEV_PHONE, DEV_WEB, DEV_ADDRESS)
VALUES ('null', '$devname', '$devemail', '$devphone', '$devweb', '$devaddress')";

if (mysqli_query($dbc, $sql)) {
    print '<script language = "javascript"> alert("New developer created successfully!");
			window.location.assign("fadminHome.php"); </script>';
} else {
    print 'Error: " . $sql . "<br>" . mysqli_error($dbc)';
}

mysqli_close($dbc);




?>