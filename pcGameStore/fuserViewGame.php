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
    background-image: url("baymax.jpg");
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
</style>

</head>
<body>
<font face="arial">
<ul>
<div class="navbar">
	<li><a href="fuserHome.php">Home</a></li>
		<div class="dropdown">
			<li><button class="dropbtn"><?php session_start(); Print ''. $_SESSION["username"]; ?></button>
			<div class="dropdown-content">
				<a href="fuserViewGame.php">View Your Games</a>
				<a href="fuserViewProfile.php">View Your Profile</a>
			</li>
			</div>
			<div style="float: right;"><a href="userLogout.php">Log Out</a></div>
		</div>
</div>
</ul>


<center>

<br><br><br>
<h1>YOUR GAMES</h1>
<br><br><br>

<?php
// Include connection
include 'connection.php';

// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = ''.$_SESSION["username"].'';

$sql = "SELECT * FROM games, customer, purchase WHERE games.GAME_ID = purchase.GAME_ID AND purchase.CUST_ID = customer.CUST_ID AND customer.CUST_NAME = '$name' ORDER BY GAME_NAME ASC";
$result = mysqli_query($dbc, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result))
	{
		print '<b><div style="float: left; width: 33%; height: 50%;"><img width = 80% src="data:image/jpeg;base64,'.base64_encode( $row["GAME_PIC"] ).'"/>';
        print '<br>'. $row["GAME_NAME"]. '<br> </div></b>';
    }
}
else {
    print '0 results';
}

mysqli_close($dbc);
?> 

		
		
<div class="footer">
	<font color="white">
		<p>Typo.co &#9400;</p>
	</font>
</div>
</center>
</font>
</body>
</html>
