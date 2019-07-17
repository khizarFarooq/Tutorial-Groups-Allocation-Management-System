<?php
session_start();

$conn=mysqli_connect("localhost","root","","segp");
$username=$_POST['username'];
$password=$_POST['pass'];


$result = mysqli_query($conn,"select * from user where user_name='$username' and password = '$password'");

$row = mysqli_num_rows($result);
if($row>0)
{
	$_SESSION['admin']=$username;
	
	header("location:forms.php");
    
}
else
{
	header("location:login.php");
   
}


?>