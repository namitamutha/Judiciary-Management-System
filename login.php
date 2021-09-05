<?php
	include "connection.php";
    
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
	$password_2 = filter_input(INPUT_POST, 'password_2');
    $person = filter_input(INPUT_POST, 'person');
	if($password == $password_2){
    if (!empty($person)){
    if (!empty($username)){
    if (!empty($password)){
    
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
	
    if ($person==="judge" and $password_2==$password){
    $sql = "INSERT INTO judge (username, password)
    values ('$username','$password')";
    }
    else if ($person=="registrar" and $password_2==$password){
    $sql = "INSERT INTO registrar (username, password)
    values ('$username','$password')";
    }
    else if ($person=="lawyer" and $password_2==$password){
    $sql = "INSERT INTO lawyer (username, password)
    values ('$username','$password')";
    }
    if ($con->query($sql)){
    echo "Successful account creation";
	header("Location:login.html");

    }
   
    $con->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
	?>
	<html>
	<script type="text/javascript">
alert("Username should not be empty");
location='signup.php';
</script>
</html>
<?php
    die();
    }
    }
    else{
    echo "Select one of the three: judge,registrar,lawyer";
    die();
    }
	}
	else{
		?>
	<html>
	<script type="text/javascript">
alert("Passwords do not match");
location='signup.php';
</script>
</html>
<?php
	}
    ?>

