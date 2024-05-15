<?php include('server.php')?>

<!DOCTYPE html>
<html>
  <head>
    <title>Women Safety Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
      <style>
        body{
          background: url(img/log.webp);
          background-repeat: no-repeat;
          background-size: cover;
                }
          </style>
      <style>
    
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
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="emergency.php">Services</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="aboutus.php">About us</a></li>
            
            <li class="item"><a href="register.php">Register</a></li>
            
            
        </ul>
      </nav>
    
    <form action="index1.php" method="post">
    <h1 text-align:center>Log in</h1>
		<p>Please enter email and password</p>
		<hr>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      
      <button type="submit">Sign Up</button>
      <p>New user? <a href="register.php">Register</a>.</p>
    </form>
    <footer>
  <div class="center">
      <p>Copyright &copy; 2023 Women Safety. All rights reserved.</p>
  </div>
</footer>
  </body>
</html>
