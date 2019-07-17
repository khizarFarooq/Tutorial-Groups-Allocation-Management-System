<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

$year=$_SESSION['edit_group_year'];
$group=$_POST['group'];
$id=$_SESSION['edit_id'];

if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}


$query =mysqli_query($conn,"SELECT * from groups where group_name='$group' AND year='$year'");
								$r= mysqli_fetch_row($query);


$query_insert="UPDATE student_data  SET
				groupno='".$r[0]."'
				
				WHERE id='".$id."'
				
				";

$result = $conn->query($query_insert);


if ($result) {
	header('location:displaygroups.php');
}



?>