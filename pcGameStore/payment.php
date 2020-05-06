<?php
// Include connection
include 'connection.php';


session_start();

$userid = ''.$_SESSION["userid"].'';
$gamebuy = $_SESSION['gamebuy'];
$date = date("Y-m-d");


$sql = "INSERT INTO purchase (DATE_PURCHASE, CUST_ID, GAME_ID) VALUES ('$date', '$userid', '$gamebuy')";

if (mysqli_query($dbc, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	 echo '<script language="javascript"> alert("Thank you for buying with us!");
		window.location.assign("fuserHome.php"); </script>';
		
			
mysqli_close($dbc);


?>