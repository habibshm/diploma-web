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

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

{
    box-sizing: border-box;
}

input[type=text]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}


</style>

</head>
<body>
<font face="arial">
<ul>
<div class="navbar">
	<li><a href="fuserHome.php">Home</a></li>
		<div class="dropdown">
			<li><button class="dropbtn"><?php session_start(); Print ''. $_SESSION["username"].''; ?></button>
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
<h1><?php Print ''. $_SESSION["username"].''; ?> </h1>


<form name="fuserdetail" method="post" action="userViewProfile.php">


<?php
// Include connection
include 'connection.php';

// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

$userid = ''.$_SESSION["userid"].'';


$sql = "SELECT * FROM customer WHERE CUST_ID = '$userid' ";
$result = mysqli_query($dbc, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row

    if($row = mysqli_fetch_assoc($result))
	{
		print '<div style="margin-top: 50px; border-radius: 5px; background-color: #EAEAEA; padding: 20px; width: 60%;">
		
				<div class="row">
				<div class="col-25">
				<label for="userid">USER ID</label>
				</div>
				<div class="col-75">
				<input type="text" name="userid" id="userid" value='.$row["CUST_ID"].' disabled>
				</div>
				</div>
				
				<div class="row">
				<div class="col-25">
				<label for="username">USERNAME</label>
				</div>
				<div class="col-75">
				<input type="text" name="username" id="username" value='.$row["CUST_NAME"].' >
				</div>
				</div>
				<div class="row">
				<div class="col-25">
				<label for="password">PASSWORD</label>
				</div>
				<div class="col-75">
				<input style=" width: 100%; padding: 12px; border:1px solid #ccc; border-radius: 4px;box-sizing: border-box;resize: vertical;" type="password" name="password" id="password" value='.$row["CUST_PASSWORD"].' >
				</div>
				</div>
				<div class="row">
				<div class="col-25">
				<label for="email">EMAIL</label>
				</div>
				<div class="col-75">
				<input type="text" name="email" id="email" value='.$row["CUST_EMAIL"].' >
				</div>
				</div>
				<div class="row">
				<div class="col-25">
				<label for="phone">PHONE NUMBER</label>
				</div>
				<div class="col-75">
				<input type="text" name="phone" id="phone" value='.$row["CUST_PHONE"].' >
				</div>
				</div>
				<div class="row">
				<br><input name="btnupdate" id="btnupdate" type="submit" value="Update" >
				</div>
				</div>';
    }
}
else {
    print '0 results';
}

mysqli_close($dbc);
?> 

		
</form>
</center>
</font>
</body>
</html>
