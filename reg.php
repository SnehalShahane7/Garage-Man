<?php

$fullname = $_POST['fullname'];
$phonenumber= $_POST['phonenumber'];
$email = $_POST['email'];
$Confirmpass = $_POST['Confirmpass'];
$password = $_POST['password'];


 $servername="localhost";
 $username="root";
 $password="";
 $database="garagelogin";

// create a connection 

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
    die ("sorry we failed to connect:". mysqli_connect_error());
}
else{



  $stmt = $conn->prepare(" INSERT INTO `register` (`Full Name`, `Phone Number`, `Email`, `Confirm password`, `Password`) VALUES (?,?,?,?,?);");


$stmt->bind_param("sssss" ,$fullname, $phonenumber ,$email,$Confirmpass,$password);
$stmt->execute();

echo "Register is successfully ";
     


}



?>
