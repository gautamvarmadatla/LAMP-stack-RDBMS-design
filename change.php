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
    $name = $_POST['name'];
    $pnum = $_POST['phone_number'];
    $city = $_POST['city'];
    $address = $_POST['flatno'];
    $bankerssn = $_POST['bankerssn'];

    $query = "UPDATE customer SET name = '$name', City = '$city', address = '$address', TelePhone = '$pnum', BankerSSN = '$bankerssn' WHERE SSN = '$SSN'";

    $run = mysqli_query($conn,$query);

    if($run){
        echo "<script type='text/javascript'>alert('Successfully Modified!'); window.location.href='index.html';</script>";
    }
    else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
else{
    echo "Hello";
}
?>