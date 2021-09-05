<?php

    $cin = filter_input(INPUT_POST, 'cin');
    $reason = filter_input(INPUT_POST, 'reason');
    $summary = filter_input(INPUT_POST, 'summary');
   
 
    if (!empty($cin)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "600613yael%100";
    $dbname = "projectjudge";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO hearing(reason,summary,cin)
    values ('$reason','$summary','$cin')";
    if ($conn->query($sql)){
		?>
		<html>
<script type="text/javascript">
alert("Inserted ");
location='hearing_1.php';
</script>

<?php 
    
    }
    else{
    ?>
	<html>
<script type="text/javascript">
alert("Error!!");
location='hearing_1.php';
</script>
</html>
<?php
    }
    $conn->close();
    }
    }
    else{
    
    die();
    }
   

?>


