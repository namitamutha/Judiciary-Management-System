<html>
<body bgcolor="#fada5e">

<?php
include "connection.php";

$cin=$_POST['cin'];
$sql = "SELECT * FROM hearing where cin='$cin'";
$result = $con->query($sql);

?>
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
		<th colspan="2" ><h2>Hearings for the case</h2></th>
	</tr>
	<tr>
	    <th>Reason</th><th>Summary</th>
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
<script type="text/javascript">
alert("Payment cancelled! Recheck Case Id");
location='payment.php';
</script>
<?php 
    
}

$con->close();
?>
</table>
</html>