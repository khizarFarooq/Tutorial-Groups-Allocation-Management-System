<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();
if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
$id=$_REQUEST['id'];


$name = $_POST['name'];
$department = $_POST['department'];



$query_insert="UPDATE staff  SET
				name='".$name."',

				department='".$department."'
				WHERE id='".$id."'
				
				";


$result_insert=mysqli_query($conn,$query_insert);
if($result_insert)
{
	
	//header("Location: edit_record.php?id=".$id."");
	header("Location:displaystaff.php");
}


?>