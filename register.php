<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Animal Safety</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
        body{
		  background-color:black;
          background-repeat: no-repeat;
          background-size: cover;
                }
          
	form 
		{
		font-family: Arial, Helvetica, sans-serif;
		margin-left:30%;
		margin-right:25%;
		margin-bottom: 10px;
		padding: 0px 15px 0 15px;
		}
	input[type=text], input[type=password] ,input[type=email]
		{
		width: 97%;
		padding: 10px;
		margin: 5px 0 22px 0;
		display: block;
		border: none;
		background: #f9f6f6;
		}
	hr 
		{
		border: 1px solid #575151;
		margin-bottom: 5px;
		}
	.registerbutton
		{
		background-color: #29a329;
		color: white;
		padding: 15px 20px;
		margin: 10px 0px;
		border: none;
		cursor: pointer;
		width: 100%;
		}
	

</style>
</head>
<body>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Log in</a>
  	</p>
  </form>
  <footer>
		<div class="center">
			<p>Copyright &copy; 2023 Women Safety. All rights reserved.</p>
		</div>
	  </footer>
</body>
</html>