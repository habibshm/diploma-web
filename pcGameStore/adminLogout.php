<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
if (isset($_SESSION["aName"])) {
		print "";
	} // Checks if session exists 
	else {
		print '<script>alert("You have logged out!");</script>';
		print '<script>window.location.assign("index.php");</script>';
	} 
?>