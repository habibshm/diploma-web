<html>
<head>
<style>

.footer {
    background-color: black;
    padding: 10px;
	position:fixed;
	left:0px;
	bottom:0px;
	height:30px;
	width:100%;
}

.button {
    background-color: #9400F9;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	width: 15%;
	height: 15%
}

.button:hover {background-color: #AE39FF}


body  {
    background-image: url("red-and-black-colors-33-background-wallpaper.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
	background-size: 100%;
	margin: 0;
}

.navbar {
    overflow: hidden;
    background-color: black;
    font-family: Arial;
	position: fixed;
	top: 0;
	width: 100%;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
	
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #9400F9;
}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
	position: fixed;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.active {
    background-color: #4CAF50;
}

input[type=text], [type="file"], [type="date"], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #9400F9;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #AE39FF;
}

</style>

</head>
<body>
<font face="arial">
<ul>
<div class="navbar">
	<li><a href="fadminHome.php">Home</a></li>
		<div class="dropdown">
			<li><button class="dropbtn"><?php session_start(); print ''. $_SESSION['name']; ?></button>
			<div class="dropdown-content">
				<a href="fadminViewGame.php">View All Games</a>
				<a href="fadminAddGame.php">Add New Game</a>
				<a href="fadminAddDeveloper.php">Add New Developer</a>
				<a href="fadminViewTotalProfit.php">View Total Profit</a>
			</li>
			</div>
		
			<div style="float: right;"><a href="adminLogout.php">Log Out</a></div>
		</div> 
</div>
</ul>


<center>
<?php

// Include connection
include 'connection.php';

// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sqldev = "SELECT * FROM developer";
$resultdev = mysqli_query($dbc, $sqldev);


?>

<div style="margin-top: 100px;"><h1><font color="white">Enter Details Of The Game.</font><h1></div>
<div style="margin-top: 50px; border-radius: 5px; background-color: #EAEAEA; padding: 20px; width: 60%;">
  <form name="fadminaddgame" method="post" action="adminAddGame.php" enctype="multipart/form-data">
	
	<label for="GAME_NAME">Game Name</label>
	<input type="text" id="GAME_NAME" name="GAME_NAME" placeholder="Game name..." required>
	
	<label for="GAME_PIC">Select image to upload</label>
	<input style="background-color: white;" type="file" id="GAME_PIC" name="GAME_PIC" placeholder="Game picture...">
	
	<label for="GAME_PRICE">Game Price</label>
	<input type="text" id="GAME_PRICE" name="GAME_PRICE" placeholder="Game price in RM..." required>
	
	<label for="GAME_GENRE">Game Genre</label>
	<input type="text" id="GAME_GENRE" name="GAME_GENRE" placeholder="Game genre example: Action..." required>
	
	<label for="GAME_DATE">Game Date</label>
	<input type="date" id="GAME_DATE" name="GAME_DATE" >
	
	<label for="DEV_NAME">Developer</label>
		<select id="DEV_NAME" name="DEV_ID" >
	<?php
		
		if (mysqli_num_rows($resultdev) > 0)
		{
		while ($row = mysqli_fetch_assoc($resultdev))
			{
				print '<option value='.$row['DEV_ID'].'>'.$row['DEV_NAME'].'</option>';
			}
				print '</select>';
		}
		print	'If there is no developer in the list, <a href="fadminAddDeveloper.php">click here</a> to add the new one.<br><br>';
		
	?>
		
    <input name="submit" type="submit" value="Submit">
  </form>
</div>
<br><br><br><br><br><br><br>
<div class="footer">
	<font color="white">
		<p>Typo.co &#9400;</p>
	</font>
</div>
</center>
</font>
</body>
</html>