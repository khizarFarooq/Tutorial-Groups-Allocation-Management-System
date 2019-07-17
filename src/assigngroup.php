<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();
//$id=$_REQUEST['id'];

//$id=$_SESSION['id'];
$group=$_POST['group'];
$year=$_SESSION['sal'];
$uob=$_POST['uob'];



$_SESSION['id'] = 0;

$query =mysqli_query($conn,"SELECT * from groups where group_name='$group' AND year='$year'");
								$r= mysqli_fetch_row($query);

$query_member_update =mysqli_query($conn,"UPDATE groups SET members=members+1 WHERE id='$r[0]'");
								
$query_insert="UPDATE student_data  SET
				groupno='".$r[0]."'
				
				WHERE uob='".$uob."'
				
				";

$result = $conn->query($query_insert);


if ($result) {
	header('location:group.php');
}


?>