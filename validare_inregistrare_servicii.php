<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['numecompanie']) and isset($_POST['adresa']) and isset($_POST['ariecomerciala']) and isset($_POST['telefon']) and isset($_POST['email']) and isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
    
$numecompanie = $_POST['numecompanie'];
$adresa = $_POST['adresa'];
$ariecomerciala = $_POST['ariecomerciala'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
    //3.1.2 Checking the values are existing in the database or not
$query = "INSERT INTO `servicii_comapnii` (Username, Parola, NumeCompanie, ArieComerciala, Adresa, Email,Numartelefon)
VALUES ('$username','$password','$numecompanie','$ariecomerciala','$adresa','$email','$telefon');";
    
    
 
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
header('Location: RegisterServiciu.html');
}
?>