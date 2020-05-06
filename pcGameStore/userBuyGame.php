<?php
// Include connection
include 'connection.php';


session_start();

$name = ''.$_SESSION["username"].'';
$game = $_GET["id"];
$_SESSION['gamebuy'] = $game;
$chkgame = array();
$counter = 0;


$sql = "SELECT * FROM games, customer, purchase WHERE games.GAME_ID = purchase.GAME_ID AND purchase.CUST_ID = customer.CUST_ID AND customer.CUST_NAME = '$name'";
$result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
	{
		$chkgame [$counter] = $row['GAME_ID'];
		$counter++;
    }
}

for($counter = 0; $counter<=count($chkgame); $counter++)
{
	if ($game == $chkgame [$counter])
	{	
		print '<script>alert("You already have this game!");</script>';
		print '<script>window.location.assign("fuserHome.php");</script>';
	}
}	

print '<script>window.location.assign("fpayment.php");</script>';		


mysqli_close($dbc);
?> 
