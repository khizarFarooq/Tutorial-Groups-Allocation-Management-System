<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}



$name = $_POST['name'];
$f_name = $_POST['fname'];
$uob = $_POST['uob'];
$cnic = $_POST['cnic'];
$department = $_POST['department'];
$year = $_POST['year'];

$photo = addslashes(file_get_contents($_FILES['image']['tmp_name']));


$query = "INSERT INTO student_data VALUES('','$name','$f_name','$uob','$cnic','$department','$year','$photo','0')";

$r = mysqli_query($conn,$query);
if ($r) {
	header('location:forms.php');
}
else
{
	//echo mysqli_error();
}


?>