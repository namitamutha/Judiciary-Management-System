<?php
    $judge = filter_input(INPUT_POST, 'judge');
    $prosecutor = filter_input(INPUT_POST, 'prosecutor');
    $crimeDate = filter_input(INPUT_POST, 'crimeDate');
    $location = filter_input(INPUT_POST, 'location');
    $type = filter_input(INPUT_POST, 'type');
    $defendantName = filter_input(INPUT_POST, 'defendantName');
    $address = filter_input(INPUT_POST, 'address');
    $officer = filter_input(INPUT_POST, 'officer');
    $arrestDate = filter_input(INPUT_POST, 'arrestDate');
    $status = filter_input(INPUT_POST, 'status');

    
  include "connection.php";
    
    $sql = "INSERT INTO courtCase(judge,prosecutor,officer,arrestDate,crimeDate,location,type,defendantName,address,status)
    values ('$judge','$prosecutor','$officer','$arrestDate','$crimeDate','$location','$type','$defendantName','$address','$status')";
    if ($con->query($sql)){
		?>
		<html>
		
<script type="text/javascript">
alert("Record entered ");
location='case.html';
</script>
<?php 
    }
    else{
		?>
<script type="text/javascript">
alert("Error!!");
location='case.html';
</script>
</html>
<?php 
    
    }
    $con->close();
    
    		
    
		?>


<?php 	
    die();
   
    

?>

