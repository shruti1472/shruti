<?php
$email = $_POST['email'];
$password = $_POST['password'];

//database connection

$conn = new mysqli('localhost','root','','shruti');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(email, password) 
    values(?,?)");
    $stmt->bind_param("ss" ,$email, $password);
    $stmt->execute();
    echo"login successfully...";
    $stmt->close();
    $conn->close();
}
?>