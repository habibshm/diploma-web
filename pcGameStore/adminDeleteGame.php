<?php
// Include connection

include 'connection.php';

// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();

$gameid = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM games WHERE GAME_ID='$gameid'";

if (mysqli_query($dbc, $sql))
{
	echo '<script language = "javascript"> alert("Game deleted successfully!");
	window.location.assign("fadminViewGame.php"); </script>';
}
else
{
    print '<script> alert("Error while deleting game!"); window.location.assign("fadminViewGame.php"); </script>';
}

mysqli_close($dbc);

?>