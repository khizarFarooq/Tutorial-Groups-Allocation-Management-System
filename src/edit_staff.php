<?php
$conn = mysqli_connect('localhost','root','','segp');
session_start();
if (!(isset($_SESSION['admin']))) {
  header("location:login.php");
}
$id=$_REQUEST['id'];
$query_select="SELECT * FROM staff WHERE id='".$id."' LIMIT 1";
$results_select=mysqli_query($conn,$query_select);
$row_select= mysqli_fetch_array($results_select);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Staff</title>

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
				<a class="navbar-brand" href="index.php"><span>Namal</span>College</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="signout.php" ><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log Out</a>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search" action="search.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search" name="search"><br>
				<input type="submit" value="Search"  class="btn btn-primary">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="forms.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Add New Student</a></li>
			<li><a href="creategroup.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Create Group</a></li>
			<li><a href="group.php" name="generate_pdf"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"/></svg></svg> Assign Groups</a></li>
			<li><a href="display.php"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Display Students</a></li>
			<li><a href="displaystaff.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Display Staff</a></li>
			<li><a href="displaygroups.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Display Group</a></li>
			<li><a href="Report.php"><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Download Data As PDF</a></li>
			<li><a href="upload_file.php"><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg> Upload File</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms</h1>
			</div>
		</div><!--/.row-->
				

		<form method="post" action="edit_staff_process.php"  enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
							<div class="panel-body">
								<div class="form-group has-success">
									<label>Name</label>
									<input type="text" class="form-control" style="width: 40%" placeholder="Name" name="name" value="<?=$row_select['name']?>"><br>
									<label>Department</label>
									<input type="text" class="form-control" style="width: 40%" placeholder="Name" name="department" value="<?=$row_select['department']?>"><br>
									
								</div>

								<input type="hidden" value="<?=$id?>" name="id">
    							<input type="submit" id="txt_v" class="btn btn-primary">

								
							</div>
						</div>
					</div>
						</form>

						
					
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
