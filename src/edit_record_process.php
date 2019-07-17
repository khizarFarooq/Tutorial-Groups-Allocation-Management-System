<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();
if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
$id=$_REQUEST['id'];


$name = $_POST['name'];
$f_name = $_POST['fname'];
$uob = $_POST['uob'];
$cnic = $_POST['cnic'];
$department = $_POST['department'];
$year = $_POST['year'];

$photo = addslashes(file_get_contents($_FILES['image']['tmp_name']));


$query_insert="UPDATE student_data  SET
				name='".$name."',
				f_name='".$f_name."',
				uob='".$uob."',
				cnic='".$cnic."',
				department='".$department."',
				year='".$year."',

				photo='".$photo."'
				WHERE id='".$id."'
				
				";


$result_insert=mysqli_query($conn,$query_insert);
if($result_insert)
{
	
	//header("Location: edit_record.php?id=".$id."");
	header("Location:display.php");
}


?>