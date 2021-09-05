
<html>

<body bgcolor="#fada5e">
<?php

include "connection.php";

$sql = "SELECT cin, judge FROM courtCase";
$result = $con->query($sql);

?>
<div align="right">
<button onclick="window.location='welcome.html';"><h2 align="right">LOG OUT</h2></button>
</div>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
		<th colspan="2" ><h2>Case Summary</h2></th>
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
alert("No cases here");
location='payment.php';
</script>
<?php 
    echo "0 results";
}
$con->close();
	?>

</table>
<h3><center>Pay Rs.10 to view case details for the required CIN </h3>




</body>
</html>



<html>
<head>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-75 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="slots3.php" method = "POST">


          <div class="col-50">
            <h3>Payment</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
			  <div class="col-50">
				<label >Enter CIN</label>
				<input type="text" name="cin"  required>					
			  </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="PAY" class="btn">
      </form>
    </div>
  </div>
 
</div>

</body>
</html>

