<?php
// remove all session variables
session_unset($_SESSION["username"]); 

// destroy the session 
session_destroy($_SESSION["username"]); 
if (isset($_SESSION["username"])) {
	print '<script>alert("Error! Not logout");</script>';
	print '<script>window.location.assign("fuserHome.php.php");</script>';
	} // Checks if session exists 
	else {
		print '<script>alert("You have logged out!");</script>';
		print '<script>window.location.assign("index.php");</script>';
	} 
?>