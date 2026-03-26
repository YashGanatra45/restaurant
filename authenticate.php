<?php
session_start();
include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($query)>0)
{
$_SESSION['user']=$email;
header("location:home.php");
}
else
{
$check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($check)==0)
{
echo "Signup First";
}
else
{
echo "Wrong Password";
}
}
?>