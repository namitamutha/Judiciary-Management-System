
<!DOCTYPE html>
<html>
<head>
  <title>Registration for Judisciary Database System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  <h2>Account Creation</h2>
  </div>

  <form method="post" action="login.php">
  <div >
	<input type="radio" name="person" value="registrar" checked>Registrar
	&nbsp;
	&nbsp;
	&nbsp;
	<input type="radio" name="person" value="lawyer">Lawyer
	&nbsp;
	&nbsp;
	&nbsp;
	<input type="radio" name="person" value="judge">Judge <br>
  </div>
  
  <div class="input-group">
  <input pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Enter Valid Details')" type="text" class="form-control" name="username" placeholder="Username" >
  </div>

  <div class="input-group">
   <input type="password" name="password" placeholder="Password" required>
  </div>
  
  <div class="input-group">
   <input type="password" name="password_2" placeholder="Confirm Password" required>
  </div>
  <div class="input-group">
   <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
  
  <p>
  Already a member? <a href="login.html">Log in</a>
  </p>
  
  </form>

</body>
</html>