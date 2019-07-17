<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
$id=$_REQUEST['id'];

$query_delete="Delete from student_data where id= $id";


$result_delete=mysqli_query($conn,$query_delete);
if($result_delete)
{
	
	//header("Location: edit_record.php?id=".$id."");
	header("Location:display.php");
	
}


?>