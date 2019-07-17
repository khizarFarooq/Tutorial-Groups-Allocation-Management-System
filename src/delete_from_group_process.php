<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

// $year=$_SESSION['edit_group_year'];
// $group=$_POST['group'];
// $id=$_SESSION['edit_id'];
$id=$_REQUEST['id'];

$_SESSION['unallocate']=0;

$test=$_SESSION['unallocate'];

if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
///query to get group no from student id 
$query =mysqli_query($conn,"SELECT * FROM student_data WHERE id='$id'");
								$r= mysqli_fetch_row($query);

$query_update_member=mysqli_query($conn,"UPDATE groups SET members=members-1 WHERE id='$r[8]'");



///update student group
$query_insert="UPDATE student_data  SET
				groupno='0'
				
				WHERE id='".$id."'
				
				";

$result = $conn->query($query_insert);


if ($result) {
	header('location:displaygroups.php');
}



?>