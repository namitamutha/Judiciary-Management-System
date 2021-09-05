<?php
include "connection.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $person = mysqli_real_escape_string($con,$_POST['person']);

    if ($uname != "" && $password != ""){
	 if ($person==='judge'){
	     $sql_query = "select count(*) as cntUser from judge where username='".$uname."' and password='".$password."'";
	    }
	    else if ($person=="registrar"){
	    $sql_query = "select count(*) as cntUser from registrar where username='".$uname."' and password='".$password."'";
	    }
	    else if ($person=="lawyer"){
	    $sql_query = "select count(*) as cntUser from lawyer where username='".$uname."' and password='".$password."'";
    	}

        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            //header('Location: case.php');
 	if ($person==='judge'){
		header('Location: judge.html');
	    }
	    else if ($person=="registrar"){
	   header('Location: registrar.html');
	    }
	    else if ($person=="lawyer"){
	    header('Location: payment.php');
    	}
 	
?>
<html>
<script type="text/javascript">
alert("you are logged in!!");
location='hearing.php';
</script>
</html>
<?php
        }else{
			?>
<script type="text/javascript">
alert("invalid username or password ");
location='login.html';
</script>
</html>
<?php
        }

    }

}
?>
