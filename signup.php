<?php
include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];

$check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($check)>0)
{
echo "User Already Exists";
}
else
{
mysqli_query($conn,"INSERT INTO users(email,password) VALUES('$email','$password')");
echo "Signup Successful <a href='login.php'>Login</a>";
}
?>