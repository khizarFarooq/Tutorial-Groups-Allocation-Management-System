<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Add Student To Groups</title>

<link href="design/css/bootstrap.min.css" rel="stylesheet">
<link href="design/css/datepicker3.css" rel="stylesheet">
<link href="design/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<ul class="nav menu">
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Add New Student</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Edit Students</a></li>
			<li><a href="creategroup.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Create Group</a></li>
			<li class="active"><a href="group.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Assign Groups</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Download Data As PDF</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Upload File</a></li>
			<li><a href="display.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Display Students</a></li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>
		</ul>

	</div><!--/.sidebar-->







<!-- Modal For Create Group And Assign Tutor-->
    <div  class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <center><h4 class="modal-title">Welcome To Create Group And Assign Tutor</h4></center>
          </div>
          <div class="modal-body" >

            <!--form start-->
            <form class="form-horizontal">

              <div class="form-group">
                <label class="control-label col-sm-5">Group Name:</label>
                
                <div class="col-sm-4">

                  <input type="text" required class="form-control required" placeholder="Enter Name ">
                </div>

              </div>
              <div class="form-group"></div>
              <div class="form-group">
                <label class="control-label col-sm-5">Group NO:</label>
                <div class="col-sm-4" >

                  <input type="text" required class="form-control" placeholder="Enter NO">
                </div>
              </div>
              <div class="form-group"></div>
              <div class="form-group">
                <label class="control-label col-sm-5">Tutor Name:</label>
                <div class="col-sm-4" >

                  <input type="text" required class="form-control" placeholder="Enter Name">
                </div>
              </div>
            </form>
            
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="modal-footer">

                <button type="submit" class="btn btn-info" data-dismiss="modal">Save</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>








		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Student To Groups</h1>
			</div>
		</div><!--/.row-->
				

		<form method="post" >
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

								<div class="form-group has-success">
									<div  style="margin-left: 5%;">
									
									<select class="form-control" name="year" style="width: 40%" method="post">
										<option disabled selected>Select Year</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select><br>

									<input type="submit" name="" data-toggle="modal" data-target="#myModal">
									<!-- <?php
									$gpy=$_POST['year'];
									$_SESSION['gpyear']=$gpy

									?> -->



									<!--  <select class="form-control"  style="width: 40%" method="post" name="group">
										<option disabled selected>Select Group</option>
										<?php

										$gpyearr= $_SESSION['gpyear'];
										$sql = "SELECT * FROM groups where year='$gpyearr'";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
        								echo "<option value='".$row["group_name"]."'>".$row["group_name"]."</option>";
   										 }
   										 $row= mysqli_fetch_row($result);
										?>
									</select> -->

									<!-- <lable>Enter UOB </lable>

									<input type="text" name="uob" class="form-control" style="width: 40%" required> <br> -->
								 
								<input type="hidden" value="<?=$row[0]?>" name="id">
								<!-- <button id="txt_v"><a href="group_process.php">ADD</a></button> -->
								</div>
								</div>

							</div>

						</div>
					</div>
						</form>





			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Show Groups</div>
					<div class="col-lg-6">
					
					<div class="panel-body">

						<div class="panel-heading">Select Year</div>
						<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						<select class="form-control" onchange="this.form.submit()" name="yl" id="yl">
										<option disabled selected>Select Year</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
									<?php
									$showyear=$_POST['yl'];
									$_SESSION['showyear']=$showyear;

									?>

						</form>
					</div>
				</div>




				<div class="col-lg-6">
					<div class="panel-body">

						<div class="panel-heading">Select Group</div>
						<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						<select class="form-control" onchange="this.form.submit()" name="cl">
										<option disabled selected>Select Group</option>
										<?php
										$yl=$_SESSION['showyear'];
										$sql = "SELECT * FROM groups where year='$yl'";
										$result = $conn->query($sql);
										while($row = $result->fetch_assoc()) {
        								echo "<option value='".$row["group_name"]."'>".$row["group_name"]."</option>";
   										 }
										?>
									</select>
									<?php
									$showgroup=$_POST['cl'];
									$_SESSION['showgroup']=$showgroup;

									?>

						</form>
					</div>
				</div>






					<div class="panel-body">
						<div class="RackList">
							<?php 
							$cl=$_SESSION['showgroup'];
							$yl=$_SESSION['showyear'];
								

								$query =mysqli_query($conn,"SELECT * from groups where group_name='$cl' AND year='$yl'");
								$r= mysqli_fetch_row($query);

								$sql = "SELECT * FROM student_data WHERE groupno = '$r[0]'";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
    
									echo "<table class='table table-hover'>";
									echo "<thead><tr> <th>Name</th><th>Father Name</th><th>UOB</th><th>CNIC</th><th>Department</th><th>Year</th></tr></thead><tbody>";
    									while($row = $result->fetch_assoc()) {
        									echo "<tr><td>".$row["name"]."</td><td>".$row["f_name"]."</td><td>".$row["uob"]."</td><td>".$row["cnic"]."</td><td>".$row["department"]."</td><td>".$row["year"]."</td>";  

        									if ($row['groupno']!=0) {

        									?>

        											<td><a href="delete_from_group.php?id=<?=$row['id']?>"> <input type="button" value="Delete" class="btn btn-default btn-md pull-right"></a></td>
        							<?php
        							}			
    									}

									echo "</tbody></table>";
								} else {
    								echo "0 results";
								}
								$conn->close();
							
 							?>
						</div>
					</div>

				</div>
			</div>
		</div>


					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	
</body>

</html>
