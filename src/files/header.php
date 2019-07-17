<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Medicina</title>

<link href="design/css/bootstrap.min.css" rel="stylesheet">
<link href="design/css/styles.css" rel="stylesheet">

 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">


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
				<a class="navbar-brand" href="index.php"><span>Medicina</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Imran Medical Store <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="change.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Change Password</a></li>
							<li><a href="index.php?logout=1"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="expiry_list.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Expiry Dates</a></li>
			<li><a href="medicine_list.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Medicine List</a></li>
			<li><a href="purchase.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Purchase</a></li>
			<li><a href="vendor.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Vendors</a></li>
			
			<li><a href="rack.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Rack</a></li>
			<li><a href="reports.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Reports</a></li>
			
			<li role="presentation" class="divider"></li>
		</ul>

	</div><!--/.sidebar-->

<!--DatePicker Funcation -->
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>