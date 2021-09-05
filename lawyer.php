<html>
<head>
<link rel="stylesheet" type="text/css" href="navigation.css" media="screen"/>
</head>
<body>
<div class="content">

<?php
include "connection.php";

$sql = "SELECT cin, judge FROM courtCase";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> cin: ". $row["cin"]. " - judge: ". $row["judge"]. " <br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
<form>
<p>
<label>Enter CIN
<input type="text" name="cin" required>
</label>
<br>
<br>
<br>
<a href="payment.php">Payment gateway</a>
</p>


</form>
</div>
</body>
</html>
