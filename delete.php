<!DOCTYPE html>
<html>
<body>

<body style="background-color: paleturquoise;">
<center><h2 style="font-family: 'Courier New';">Delete Customer</h2><br><br><br><br><br><br>

<form action="remove.php" method = "POST">
	<label for="ssn"><b>SSN</b></label>
      <input type="text" placeholder="Enter customer's SSN" name="ssn" required> <br> <br> 
      
      <div class="clearfix">
        <button class=button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Cancel </b> </button>
        <button class=button type="submit" name = "submit" class="signupbtn"><b> Save </b> </button>
      </div>
</div>
</form>
</center> 
</body>
</html>