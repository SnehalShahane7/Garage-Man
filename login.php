<?php

$email = $_POST['email'];
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

//    $stmt = $conn->prepare("INSERT INTO `login` (`email`, `password`) VALUES (?,?);");


  $stmt = $conn->prepare("INSERT INTO `login` (`email`, `password`) VALUES (?, ?);");


$stmt->bind_param("ss",$email,$password);
$stmt->execute();

echo "the login is successfully ";
     


}



?>
