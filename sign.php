<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));

$class=$_POST['class'];
$email = $_POST['email'];
$school = $_POST['school'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$class = stripslashes($class);
$class = addslashes($class);
$email = stripslashes($email);
$email = addslashes($email);
$school = stripslashes($school);
$school = addslashes($school);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$password = stripslashes($password);
$password = addslashes($password);
$hashpassword=password_hash($password,PASSWORD_DEFAULT);




$q3=mysqli_query($con,"INSERT INTO user(name,class,school,email,mob,password) VALUES  ('$name' ,'$class', '$school','$email' ,'$mob', '$hashpassword')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
$_SESSION['class']=$class;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>