<!DOCTYPE html>
<html>
<body>
  <style>
    .button{
      background-color: coral;
      font-family: monospace;

    }
  </style>

<body style="background-color: paleturquoise;">
<center><h2 style="font-family: 'Courier New';">Modify Customer</h2><br><br><br><br><br><br><br>

<form action="change.php" method = "POST">
	<label for="ssn"><b>SSN</b></label>
      <input type="text" placeholder="Enter customer SSN" name="ssn" required> <br> <br> 
	<label for="firstname"><b>First Name</b></label> 
      <input type="text" placeholder="Enter customer name" name="name" required> <br> <br>
	<label for="mobilenumber"><b> Phone Number </b></label>
    <input type="tel" name="phone_number" id="phone_number" placeholder="Enter customer mobilenumber"  name="mobilenumber" required> <br> <br>
	<label for="city"><b>City</b></label>
      <input type="text" placeholder="Enter city" name="city" required>  <br> <br>
      <label for="flatno"><b>Flat no</b></label>
      <input type="text" placeholder="Enter flatno" name="flatno" required> <br> <br>

	<label for="bankerssn"><b>Banker SSN</b></label>
      <input type="text" placeholder="Enter Banker SSN" name="bankerssn" required> <br> <br>
	
      
      <div class="clearfix">
        <button class=button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Cancel </b> </button>
        <button class=button type="submit" name = "submit" class="signupbtn"><b> Save </b> </button>
      </div>
</div>
</form> 
</center>
</body>
</html>