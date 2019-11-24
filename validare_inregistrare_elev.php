<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['universitate']) and isset($_POST['sex']) and isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
    
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$universitate = $_POST['universitate'];
$sex = $_POST['sex'];
    //3.1.2 Checking the values are existing in the database or not
$query = "INSERT INTO `students` (CNP, Nume, Prenume, Universitate, Parola, Sex)
VALUES ('$username','$nume','$prenume','$universitate','$password','$sex');";
    
    
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($result){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "Eroare";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
header('Location: reg_succ.html');
 
}else{
echo "Eroare";
header('Location: RegisterElev.html');
}
?>