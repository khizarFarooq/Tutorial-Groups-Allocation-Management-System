<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
$id=$_REQUEST['id'];
$zero=0;

$query_insert="UPDATE student_data  SET
				
				groupno='".$zero."'
				WHERE id='".$id."'
				
				";


$result_insert=mysqli_query($conn,$query_insert);
if($result_insert)
{
	
	//header("Location: edit_record.php?id=".$id."");
	header("Location:group.php");
}


?>