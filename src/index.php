<?php
function fetch_data(){
	$output='';
	$connection=mysqli_connect("localhost","root","","segp");
	$query="SELECT * FROM student_data ORDER BY year ASC";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($result)){
		$output .= '<tr>
		<td>'.$row["id"].'</td>
		<td>'.$row["name"].'</td>
		<td>'.$row["f_name"].'</td>
		<td>'.$row["uob"].'</td>
		<td>'.$row["department"].'</td>
		<td>'.$row["year"].'</td>
		</tr>
		';
	}
	return $output;
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

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
				<a class="navbar-brand" href="#"><span>Namal</span>College</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="signout.php" ><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log Out</a>
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
			<li class="active"><a href="forms.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Add New Student</a></li>
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
				<h1 class="page-header">Home</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<a href="forms.php">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">Add New Students</div>
							
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<a href="creategroup.php">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">Create Group</div>
							
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<a href="Report.php">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">Download</div>
							
						</div>
					</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<a href="upload_file.php">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">Upload</div>
			
						</div>
					</a>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		
	<div class="container">
		<div class="table-responsive">
		
			<table class="table table-bordered">
				<tr>
					<th width="5%">Id</th>
	<th width="30%">Name</th>
	<th width="15%">Father Name</th>
	<th width="10%">UOB</th>
	<th width="60%">Department</th>
	<th width="60%">Year</th>
				</tr>
				<?php
				echo fetch_data();
				?>
			</table>
		</div>
	</div>
								

	</div>	<!--/.main-->

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
