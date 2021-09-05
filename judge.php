
<!DOCTYPE html>
<html>
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
alert("No case");
location='judge.php';
</script>
<?php
    
}
$con->close();
	?>

</table>


<form  action="slots3.php" method="post">
<p>
<br>
<center>
<h3>
<label>Enter Case Id : 

<input type="text" name="cin"  required>
<br>
<br><br>
</label>
<br> <br>
<input type="submit" name="submit"  >
<br>
</h3>
</form>
</div>
</body>
</html>

