<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

// if (!(isset($_SESSION['admin']))) {
//   header("location:login.php");
// }

$gpname = $_SESSION['groupname'];
$gyear = $_SESSION['gyear'];
$tutor = $_SESSION['grouptutor'];
$student1=$_POST['s1'];
$student2=$_POST['s2'];
$student3=$_POST['s3'];
$student4=$_POST['s4'];
$member_count=0;

$query_group_create = "INSERT INTO groups VALUES('','$gpname','$gyear','$tutor','0')";

$result_group_create = mysqli_query($conn,$query_group_create);

$query_group_id="SELECT * FROM groups WHERE group_name= '$gpname' and year='$gyear'" ;
$result_group_id=mysqli_query($conn,$query_group_id);

$row_group_id= mysqli_fetch_row($result_group_id);
//$gpid=$result_group_id[0];

$query_student1=mysqli_query($conn,"UPDATE student_data  SET
						groupno='".$row_group_id[0]."'
				
						WHERE uob='".$student1."'
				
				");
				$member_count=$member_count+1;




$query_student2=mysqli_query($conn,"UPDATE student_data  SET
						groupno='".$row_group_id[0]."'
				
						WHERE uob='".$student2."'
				
				");
				$member_count=$member_count+1;

 if(!(empty($_POST['s3']))){
     $query_student3=mysqli_query($conn,"UPDATE student_data  SET
						groupno='".$row_group_id[0]."'
				
						WHERE uob='".$student3."'
				
				");
     	$member_count=$member_count+1;
    }


 if(!(empty($_POST['s4']))){
      $query_student4=mysqli_query($conn,"UPDATE student_data  SET
						groupno='".$row_group_id[0]."'
				
						WHERE uob='".$student4."'
				
				");
      $member_count=$member_count+1;
    }

    $member_update=mysqli_query($conn,"UPDATE groups  SET
						members='".$member_count."'
				
						WHERE id='".$row_group_id[0]."'");


if ($result_group_create) {
	header('location:creategroup.php');
}

?>