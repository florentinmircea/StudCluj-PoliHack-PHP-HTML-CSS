<?php
session_start();
 require('connect.php');
$name=$_POST['username'];
$pass=$_POST['password'];
$passc=$_POST['passwordc'];
$email=$_POST['email'];
if($pass===$passc)
{
$sql = "INSERT INTO users (firstname, password, email) VALUES ('$name', '$pass','$email')";
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>