<html>
<head>
<link rel="stylesheet" type="text/css" href="navigation.css" media="screen"/>

</head>
<body>
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<div class="sidenav">
  <a href="case.html">Enter case details</a>
  <a href="hearing_1.php">Enter Hearing details</a>
  <a href="slots.php">Book a slot</a>
  <a href="particular_date.html">View Hearings of a date</a>
  <a href="pending.php">View pending cases</a>
  <a href="completed.php">View completed cases</a>
</div>
<form method="post"  action="hearing.php">
<div class="content">

<?php
include "connection.php";

$sql = "SELECT cin, judge FROM courtCase";
$result = $con->query($sql);

?>

<table align="center" border="1px" style="width:600px; line-height:40px;">
    <tr>
		<th colspan="2" ><h2>Summary of cases</h2></th>
	</tr>
	<tr>
	    <th>CIN</th><th>Judge Name</th>
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
	    </tr>
			
	<?php
		}
}
else {
	?>
<script type="text/javascript">
alert("No case left ");
location='hearing_1.php';
</script>
<?php 
    
}
$con->close();
	?>
</table><br>
<center><h3><u>Add hearing details for case</u></h3>
<br>

<p><center>
<label>Enter Case Id :
<input type="text" name="cin" placeholder="Case Id" required>
</label>
</p>

</br>
<p>
<label>Enter reason :
<textarea name="reason" maxlength="500" placeholder="Reason" required></textarea>
</label>
</p>
</fieldset>
</br>
<p>
<label>Enter summary : 
<textarea name="summary" maxlength="500" placeholder="Summary" required></textarea>
</label>
</p>
</fieldset>
</br>
<p>
<input type="submit" value="Submit">
</p>
</div>
</form>
</body>
</html>
