<?php  
function fetch_data(){
	$output='';
	$connection=mysqli_connect("localhost","root","","segp");
	$query="SELECT * FROM student_data ORDER BY id ASC";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($result)){
		$output .= '<tr>
		<td>'.$row["id"].'</td>
		<td>'.$row["name"].'</td>
		<td>'.$row["f_name"].'</td>
		<td>'.$row["uob"].'</td>
		<td>'.$row["cnic"].'</td>
		<td>'.$row["department"].'</td>
		<td>'.$row["year"].'</td>
		</tr>
		';
	}
	return $output;
}
// if(isset($_POST["generate_pdf"])){
	require_once('tcpdf/tcpdf.php');
	$obj_pdf=new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$obj_pdf->SetTitle("Generat HTML Table Data To PDF From MySql Database Using TCPDF In PHP");
	$obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
	$obj_pdf-> setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
	$obj_pdf->setPrintHeader(false);
	$obj_pdf->setPrintFooter(false);
	$obj_pdf->setAutoPageBreak(True,10);
	$obj_pdf->SetFont('helvetica','',11);
	$obj_pdf->AddPage();
	$content='';
	$content .='
	<h4 align="center">Generat HTML Table Data To PDF From MySql Database Using TCPDF In PHP</h4><br />
	<table border="1" cellspacing=0 cellpadding="3">
	<tr>
	<th width="5%">Id</th>
	<th width="20%">Name</th>
	<th width="20%">Father Name</th>
	<th width="12%">UOB</th>
	<th width="17%">CNIC</th>
	<th width="20%">Department</th>
	<th width="8%">Year</th>
	</tr>
	';
	$content .=fetch_data();
	$content .='</table>';
	$obj_pdf->writeHTML($content);
	$obj_pdf->Output('Report.pdf','I');
// }
?>



<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Generat HTML Table Data To PDF From MySql Database Using TCPDF In PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
	<br />
	<div class="container">
		<h4 align="center">Generat HTML Table Data To PDF From MySql Database Using TCPDF In PHP</h4><br />
		<div class="table-responsive">
			<div class="col-md-12" align="right">
				<form method="post">
					<input type="submit" name="generate_pdf" class="btn btn-success" value="Generat PDF" />
				</form>
			</div>
			<br />
			<br />
			<table class="table table-bordered">
				<tr>
					<th width="5%">Id</th>
	<th width="15%">Name</th>
	<th width="15%">Father Name</th>
	<th width="10%">UOB</th>
	<th width="15%">CNIC</th>
	<th width="20%">Department</th>
	<th width="5%">Year</th>
				</tr>
				<?php
				//echo fetch_data();
				?>
			</table>
		</div>
	</div>
</body>
</html> -->