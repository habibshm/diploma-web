<?php
 
	$password = $_POST['adminPassword'];
	$aName = $_POST['adminName'];
   
    if ($password == "12345") 
      {
		  session_start();
		$_SESSION['name'] = $aName;
		header ("location: fadminHome.php");
	  }
	  
	  else
	  {
		  echo '<script> alert("Wrong password");
		  window.location.assign("fadminLogin.php");
		  </script>';
	  }
?>