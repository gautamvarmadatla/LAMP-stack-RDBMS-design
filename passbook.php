<!DOCTYPE html>
<html>
<style>
    .button{
      background-color: coral;
      font-family: monospace;

    }
  </style>
<body style="background-color: paleturquoise;">
<center><h2 style="font-family: 'Courier New';">View Passbook</h2><br><br><br><br><br>

<form method = "POST">
<p class="round">
  <label for="accountid"><b>Account Number</b></label>
      <input type="text" placeholder="Enter Account Number" name="accountid" required> <br> <br>

      
      <div class="clearfix">
        <button class=button type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Menu </b> </button>
        <button class=button type="submit" name = "submit" class="signupbtn"><b> View </b> </button>
      </div>
</div>
</p>
</form> 

<table border="2", padding="12px 18px", width="100%", display="inline-block">
  <tr>
    <td>AccountID</td>
    <td>Date</td>
    <td>Transaction Code</td>
    <td>Transaction Name</td>
    <td>Debits</td>
    <td>Credits</td>
    <td> Balance </td>
  </tr>
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "online banking";

$conn = mysqli_connect($server, $username, $password, $dbname);
$accountid = $_POST['accountid'];

$records = mysqli_query($conn,"SELECT AccountID, Date_Time, TransactionCode, TransactionName, Debits, Credits, Balance FROM transactions WHERE AccountID = $accountid"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['AccountID']; ?></td>
    <td><?php echo $data['Date_Time']; ?></td>
    <td><?php echo $data['TransactionCode']; ?></td>
    <td><?php echo $data['TransactionName']; ?></td>
    <td><?php echo $data['Debits']; ?></td> 
    <td><?php echo $data['Credits']; ?></td>   
    <td><?php echo $data['Balance']; ?></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>