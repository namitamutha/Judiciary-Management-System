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


$sql = "SELECT slotss.date, courtCase.cin ,hearing.reason,hearing.summary from courtCase,hearing,slotss where courtCase.status  ='completed' and courtCase.cin=hearing.cin and hearing.hid=slotss.hid order by courtCase.cin, slotss.date";
$result = $con->query($sql);

?>
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<table align="center" border="1px" style="width:1000px; line-height:40px;">

<tr>
		<th colspan="4" ><h2>All completed cases history</h2></th>
	</tr>
	<tr>
	    <th>Date of hearing</th><th>Case Id</th> <th>Reason of hearing </th><th>Summary of that hearing</th>
	</tr>



<?php
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc())
		{
			
	?>

	<tr>
		    <th><?php $hold=$row['date'];
					  echo $hold;
			?></th>
			<th><?php $hold = $row['cin'];
					  echo $hold;
			?>
			</th>
	    

		
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
<script type="text/javascript">
alert("No completed cases ");
location='judge.html';
</script>
<?php

    
}

$con->close();
?>
</table>
</div>
</body>
</html>