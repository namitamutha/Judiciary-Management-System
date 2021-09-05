<html>
<head>
<link rel="stylesheet" type="text/css" href="navigation.css" media="screen"/>
</head>
<body>
<div class="sidenav">
  <a href="judge.php">Summary of cases</a>
  <a href="particular_date_j.html">View Hearings of a date</a>
  <a href="pending_j.php">View pending cases</a>
  <a href="completed_j.php">View completed cases</a>
</div>
<div class="content">
<?php
include "connection.php";


$sql = "SELECT cin,judge,prosecutor,officer,arrestDate,crimeDate,location,type,defendantName,address FROM courtCase where status = 'pending'";
$result = $con->query($sql);

?>
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<table align="center" border="1px" style="width:1000px; line-height:40px;">

<tr>
		<th colspan="10" ><h2>Pending Case History</h2></th>
	</tr>
	<tr>
	    <th>Case Id</th><th>Judge</th> <th>Prosecutor</th><th>Officer</th><th>Arrest Date</th><th>Crime Date</th><th>Location</th><th>Type</th><th>Defendant</th><th>Address</th>
	</tr>



<?php
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc())
		{
			
	?>

	<tr>
		    <th><?php $hold=$row['cin'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['judge'];
					  echo $hold;
			?>
			</th>
	    
		    <th><?php $hold=$row['prosecutor'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['officer'];
					  echo $hold;
			?>
			</th>
			
			<th><?php $hold=$row['arrestDate'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['crimeDate'];
					  echo $hold;
			?>
			</th>
			
			<th><?php $hold=$row['location'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['type'];
					  echo $hold;
			?>
			</th>
			
			<th><?php $hold=$row['defendantName'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['address'];
					  echo $hold;
			?>
			</th>
			
	    </tr>
			
	<?php
		}

}
else {
	?>
<script type="text/javascript">
alert("No pending cases!! ");
location='pending.php';
</script>
<?php 
    
}

$con->close();
?>
</table>
</div>
</body>
</html>