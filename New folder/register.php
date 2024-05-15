<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Women</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
        body{
			background: url(img/background1.png);
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
	input[type=text], input[type=password] 
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
<nav id="navbar">
    <div id="logo">
     <img src="img/logo4.png" alt="Womens safety.com">
    </div>
    <ul>
        <li class="item"><a href="index.html">Home</a></li>
        <li class="item"><a href="emergency.html">Services</a></li>
        <li class="item"><a href="contact.php">Contact Us</a></li>
        <li class="item"><a href="aboutus.php">About us</a></li>
        <li class ="item"><a href="signup.php">Log In</a></li>
        <li class="item"><a href="rege.html">Register</a></li>
        
        
    </ul>
  </nav>
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
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <footer>
		<div class="center">
			<p>Copyright &copy; 2023 Women Safety. All rights reserved.</p>
		</div>
	  </footer>
</body>
</html>