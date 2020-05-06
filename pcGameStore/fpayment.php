<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
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

div {
    border-radius: 5px;
    background-color: #F0F3F4;
    padding: 20px;
	
}
</style>
</head>
<font face="arial">
<body>

<h2>Payment Information</h2>

<div>
	Credit Card<hr><br><br>
  <form style="width: 100%;" name="payment" method="post" action="payment.php">
    <label for="fname">Credit Card Number</label> <label style="margin-left:700px;" for="expiremonth">Expiration</label> <label style="margin-left:175px;" for="csc">CSC</label><br>
    <input style="width: 50%;" type="text" id="fname" name="firstname" required>
	
	
	<select style="width: 6%; margin-left:100px;" id="expiremonth" name="expiremonth" required>
      <option value="01">01</option>
      <option value="02">02</option>
	  <option value="03">03</option>
      <option value="04">04</option>
	  <option value="05">05</option>
	  <option value="06">06</option>
	  <option value="07">07</option>
	  <option value="08">08</option>
	  <option value="09">09</option>
	  <option value="10">10</option>
	  <option value="11">11</option>
	  <option value="12">12</option>
    </select>
	
	<select style="width: 10%;" id="expireyear" name="expireyear" required>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
	  <option value="2019">2019</option>
      <option value="2020">2020</option>
	  <option value="2021">2021</option>
	  <option value="2022">2022</option>
	  <option value="2023">2023</option>
	  <option value="2024">2024</option>
	  <option value="2025">2025</option>
	  <option value="2026">2026</option>
	  <option value="2027">2027</option>
	  <option value="2028">2028</option>
	  <option value="2029">2029</option>
	  <option value="2030">2030</option>
	  <option value="2031">2031</option>
	  <option value="2032">2032</option>
	  <option value="2033">2033</option>
	  <option value="2034">2034</option>
	  <option value="2035">2035</option>
	  <option value="2036">2036</option>
	  <option value="2037">2037</option>
    </select>
	

    <input style="width: 5%;" type="text" id="csc" name="csc" required>
	
	<br>

    <label for="country">Country</label><br>
    <select style="width: 50%;" id="country" name="country" required>
      <option value="malaysia">Malaysia</option>
      <option value="singapore">Singapore</option>
      <option value="brunei">Brunei</option>
    </select><br>
	
	<label for="fname">First Name</label><br>
    <input style="width: 50%;" type="text" id="fname" name="firstname" required><br>
	
	<label for="lname">Last Name</label><br>
    <input style="width: 50%;" type="text" id="lname" name="lastname" required><br><br><br>
	
	
You are providing your personal data to Typo.co, subject to our Privacy & Cookie Policy. Data will be processed in territories which might provide less protection for data than your country of residence.
Need more help with your order? Visit us at TYPO help.


<br><br><br><br><br>
<input style="width: 20%; float: right; margin-right: 20px;" type="submit" value="Confirm">
<br><br><br>

 </form>
 </div>






</font>
</body>
</html>
