<?php
// Include connection
include 'connection.php';

session_start();

$gameid = $_POST['GAME_ID'];

$gamename = $_POST['GAME_NAME'];
$gamepic=addslashes (file_get_contents($_FILES['GAME_PIC']['tmp_name']));
$gameprice = $_POST['GAME_PRICE'];
$gamegenre = $_POST['GAME_GENRE'];
$gamedate = $_POST['GAME_DATE'];
$devid = $_POST['DEV_ID'];


$sql = "UPDATE `games` SET `GAME_ID`='$gameid', `DEV_ID`='$devid', `GAME_NAME`='$gamename', `GAME_PIC`='$gamepic', `GAME_PRICE`='$gameprice', `GAME_GENRE`='$gamegenre', `GAME_DATE`='$gamedate' WHERE `GAME_ID`='$gameid'";

$result = mysqli_query($dbc, $sql);

if($result)
{
	print '<script> alert("Game updated successfully!"); window.location.assign("fadminViewGame.php"); </script>';
}
else
{
    print '<script> alert("Error while updating game!"); window.location.assign("fadminViewGame.php"); </script>';
}

mysqli_close($dbc);

?> 
