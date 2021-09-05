<?php
include "connection.php";
$date=$_POST['date'];
$sql = "SELECT hearing.reason ,hearing.summary from hearing,slotss where date='$date' and hearing.hid=slotss.hid";
$result = $con->query($sql);

?>
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
<table align="center" border="1px" style="width:600px; line-height:40px;">
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<tr>
		<th colspan="2" ><h2>Hearings on chosen date</h2></th>
	</tr>
	<tr>
	    <th>Reason of Hearing </th><th>Summary of that hearing</th>
	</tr>


<?php
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc())
		{
	?>
		<tr>
		    <th><?php $hold=$row['reason'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['summary'];
					  echo $hold;
			?>
			</th>
	    </tr>
			
	<?php
		}

}
else {
	?>
	<html>
<script type="text/javascript">
alert("Error!!");
location='particular_date.html';
</script>

<?php
    
}

$con->close();
?>
</table>
</div>
</html>