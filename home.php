<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
     <!-- logged in user information -->
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

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
      <section id="home">
        <h2 class="h-primary">Welcome to Women's Safety</h2>
        <p>We are here to help women stay safe and secure. Our mission is to empower women to live their lives without fear.</p>
        <a href="tips.php">
        <button class="btn btn-primary">Learn More</button>
      </a>
      </section>
      <section class="Services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
          <div class="box">
            <a href="self.php">
              <img src="img/self-defence.jpg" alt="Service Icon 1">
              <h2 class="h-secondary center">Self Defense Training</h2>
              <p class="center">Learn the basics of self defense and feel confident in your ability to protect yourself in any situation.</p>
            </a>
          </div>
        
            <div class="box">
              <a href="tips.php">
                <img src="img/personal safety tips.png" alt="Service Icon 2">
                <h2 class="h-secondary center">Safety Tips</h2>
                <p class="center">Get tips and advice on how to stay safe and protect yourself in different situations.</p>
              </a> 
            </div>

              <div class="box">
                <a href="emergency.php">
                  <img src="img/emergency.jpg" alt="Service Icon 3">
                  <h2 class="h-secondary center">Emergency Response</h2>
                  <p class="center">Get access to emergency services and resources to help you in case of an emergency.</p>
                </a>
              </div>
            </section>
    <footer>
  <div class="center">
      <p>Copyright &copy; 2023 Women Safety. All rights reserved.</p>
  </div>
</footer>

    </body>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
</div>

</body>
</html>