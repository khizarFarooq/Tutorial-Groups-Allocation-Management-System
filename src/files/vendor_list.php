<?php 
	include ("connect.php");

$sql = "SELECT * FROM med_vendor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
echo "<table class='table table-hover'>";
echo "<thead><tr> <th>ID</th><th>Name</th><th>Person</th><th>Contact</th><th>LandLine</th><th>Address</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["vnID"]."</td><td>".$row["vnName"]."</td><td>".$row["vnPerson"]."</td><td>".$row["vnContact"]."</td><td>".$row["vnLandline"]."</td><td>".$row["vnAddress"]."</td><td><a href='model/vendor_delete.php?id=".$row["vnID"]."'>Delete</a></td></tr>";
    }

echo "</tbody></table>";

} else {
    echo "0 results";
}
$conn->close();

 ?>