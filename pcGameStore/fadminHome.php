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
	width: 20%;
	height: 20%;
}

.button:hover {background-color: #AE39FF}


body  {
    background-image: url("1162826-magic.jpg");
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
<div style="margin-top: 130px;"><h1><font color="white">Choose Action.</font><h1></div>
		<p style="margin-top: 20px"><a href="fadminViewGame.php" style="text-decoration: none; margin-right: 50px;"><button style="font-size: 30px; margin-top: 80px;" class="button"><b>VIEW ALL GAMES</b></button></a>
		
		<a href="fadminAddGame.php" style="text-decoration: none; margin-right: 50px;"> <button style="font-size: 30px" class="button"><b>ADD NEW GAME</b></button></a>
		
		<a href="fadminAddDeveloper.php" style="text-decoration: none; margin-right: 50px;"> <button style="font-size: 30px" class="button"><b>ADD NEW DEVELOPER</b></button></a>
		<br><br><br>
		<a href="fadminViewTotalProfit.php" style="text-decoration: none; margin-right: 50px;"> <button style="font-size: 30px" class="button"><b>VIEW TOTAL PROFIT</b></button></a>
		<br><br><br>
		</p>
<div class="footer">
	<font color="white">
		<p>Typo.co &#9400;</p>
	</font>
</div>
</center>
</font>
</body>
</html>
