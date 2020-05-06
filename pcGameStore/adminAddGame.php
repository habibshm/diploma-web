<?php

// Include connection
include 'connection.php';

$gamename = $_POST['GAME_NAME'];
$gamepic=addslashes (file_get_contents($_FILES['GAME_PIC']['tmp_name']));
$gameprice = $_POST['GAME_PRICE'];
$gamegenre = $_POST['GAME_GENRE'];
$gamedate = $_POST['GAME_DATE'];
$devid = $_POST['DEV_ID'];


$sql = "INSERT INTO games (GAME_ID, DEV_ID, GAME_NAME, GAME_PIC, GAME_PRICE, GAME_GENRE, GAME_DATE)
VALUES ('null', '$devid', '$gamename', '$gamepic', '$gameprice', '$gamegenre', '$gamedate')";

if (mysqli_query($dbc, $sql)) {
    print '<script language = "javascript"> alert("New game created successfully!");
			window.location.assign("fadminViewGame.php"); </script>';
}
else
{
    print '<script> alert("Error while adding game!"); window.location.assign("fadminViewGame.php"); </script>';
}

mysqli_close($dbc);




?>