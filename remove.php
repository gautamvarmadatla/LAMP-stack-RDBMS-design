<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "online banking";

$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "Error to connect DB!";
}
else{
    echo "Connection good!";
}
if(isset($_POST['submit']))
    {
    $SSN = $_POST['ssn'];

    $query = "DELETE customer, runningbalance FROM customer INNER JOIN runningbalance ON customer.AccountID = runningbalance.AccountID WHERE customer.SSN = $SSN;";

    $run = mysqli_query($conn,$query);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Deleted!'); window.location.href='index.html';</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
else{
    echo "Hello";
}
?>