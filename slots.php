<?php
include ('connection.php');

$result = mysqli_query($con,"select * from slotss");

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="navigation.css" media="screen"/>
<title>SLOT BOOKING</title>
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
<div class="content">

<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="2" ><h2>Slots Taken</h2></th>
	</tr>
	<tr>
	    <th>Date</th><th>Time</th>
	</tr>
	
	<?php
		
		while($rows = $result->fetch_assoc())
		{
			
	?>
		<tr>
		    <th><?php $hold=$rows['timee'];
					  echo $hold;
			?></th>
			<th><?php $hold = $rows['date'];
					  echo $hold;
			?>
			</th>
	    </tr>
			
	<?php
		}
	?>
</table>

<br>
<?php
$result2 = mysqli_query($con,"SELECT * FROM hearing");
?>


<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="2" ><h2>Hearings</h2></th>
	</tr>
	<tr>
	    <th>Hearing Id</th><th>Reason</th>
	</tr>
	
	<?php
		
		while($rows = $result2->fetch_assoc())
		{
			
	?>
		<tr>
		    <th><?php $hold=$rows['hid'];
					  echo $hold;
			?></th>
			<th><?php $hold = $rows['reason'];
					  echo $hold;
			?>
			</th>
	    </tr>
			
	<?php
		}
	?>
</table>

<h2 align="center">Please select a slot</h2>
<form action="slots2.php" method="post">
     <h3 align="center" >
SLOT (date/time): <input type="date"  name="date" required>
<select name="timee">
    <option value="9-11am" selected>9-11am</option>
    <option value="11-1pm">11-1pm</option>
    <option value="2-4pm">2-4pm</option>
    <option value="4-6pm">4-6pm</option>
  </select>
<br>
<br>
Enter HearingId: <input type="text"  name="hid" required>
<br><br>
    <input type="submit"></h3>
    
</form>
</div>
</body>


</html>
