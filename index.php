<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Women security management</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
        body{
          background: url(img/log.webp);
          background-repeat: no-repeat;
          background-size: cover;
                }
      
    
      /* Form Styling */
      form {
        max-width: 500px;
        margin: 0 auto;
      }
      label, input, button {
        display: block;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
      }
      label {
        font-weight: bold;
      }
      input[type="text"], input[type="email"], input[type="password"] {
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }
      button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
      }
      button[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
</head>
<body>
<nav id="navbar">
        <div id="logo">
         <img src="img/logo4.png" alt="Womens safety.com">
        </div>
        <ul>
        <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="emergency.php">Services</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="aboutus.php">About us</a></li>
            
            <li class="item"><a href="register.php">Register</a></li>
            
            
            
        </ul>
      </nav>
  <div class="header">
  	<h2 style="text-align:center">Login</h2>
  </div>
	 
  <form method="post" action="home.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <footer>
  <div class="center">
    <br>
      <label>Copyright &copy; 2023 Women Safety. All rights reserved.</label>
  </div>
</footer>
</body>
</html>