<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();
if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
//$id=$_REQUEST['id'];

//$id=$_SESSION['id'];
$group=$_POST['group'];
$year=$_SESSION['sal'];
$uob=$_POST['uob'];



$_SESSION['id'] = 0;

$query =mysqli_query($conn,"SELECT * from groups where group_name='$group' AND year='$year'");
								$r= mysqli_fetch_row($query);

								
$query_insert="UPDATE student_data  SET
				groupno='".$r[0]."'
				
				WHERE uob='".$uob."'
				
				";

$result = $conn->query($query_insert);


if ($result) {
	header('location:test.php');
}


?>