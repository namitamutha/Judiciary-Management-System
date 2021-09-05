<?php
	include "connection.php";
    $date = filter_input(INPUT_POST, 'date');
	$timee = filter_input(INPUT_POST, 'timee');
	$hid = filter_input(INPUT_POST, 'hid');
    
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO slotss(date,timee,hid)
    values ('$date','$timee','$hid')";
    if ($con->query($sql)){
		?>
		<html>
		<script type="text/javascript">
alert("Success!!");
location='slots.php';
</script>
 
<?php   
    }
    else{
	?>
		<script type="text/javascript">
alert("Error!");
location='slots.php';
</script>
</html> 
<?php 

    }
    $con->close();
   
    }

?>
