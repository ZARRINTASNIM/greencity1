<?php


include ('C:\wamp\www\GreenCity\Controller\connectionController.php');
include ('C:\wamp\www\GreenCity\Controller\logInController.php');


?>


<html>
<head>
    
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>


<script type="text/javascript" src="../javascript/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../javascript/jquery.masonry.min.js"></script>
<script type="text/javascript" src="../javascript/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="../javascript/mediaelement.min.js"></script>
<script type="text/javascript">
	$.backstretch("../Resource/images/9.jpg");
</script>

</head>
	
	<body class="single">
    <div class="scanlines"></div>
    <div class="header-wrapper opacity">
	<div class="header">
    
    <!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
                    <li><a href="indexView.php">Home</a></li>
					<li><a href="blogView.php">Blog</a></li>
					<li><a href="signUpView.php">Be Our Member</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li  class="active"><a href="logInView.php">Log In</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<!-- End Menu -->
    
	</div>
</div>
<!-- End Header -->    
    
    
		<div class="login-wrap">
			<div class="login-main">	
				<div class="login-header">
					<div class="login-headerleft">
                        <img src="../Resource/images/login.png" alt="" />
					</div>
					<div class="login-headeerright">
						<h40>Login</h40>
					</div>
				</div>
				<div class="login-content">
					<form method="post" action="">
						<div class="login-name">
							<h41>User Name</h41>
						</div>
						<div class="login-namebox">
							<input style="border:1px solid blue; border-radius:6px; height:25px; width:200px; padding-left:5px;" type="text" name="username">
						</div>
						<div>
							<?php
								if($usernameflag == 2){
									echo '<p style="color:red; margin-left:100px;">Please enter user name</p>';
								}
							?>
						</div>
						<div class="login-password">
						<h41>Password</h41>
						</div>
						<div class="login-passwordbox">
							<input style="border:1px solid blue; border-radius:6px; height:25px; width:200px; padding-left:5px;" type="password" name="password">
						</div>
						<div>
							<?php
								if($passwordflag == 2){
									echo '<p style="color:red; margin-left:100px;">Please enter Password</p>';
								}
							?>
						</div>
                          <?php
								if($passwordflag == 3){
									echo '<p style="color:red; margin-left:100px;">Wrong User Name or Password</p>';
								}
							?>
                        
						<div class="login-btn">
							<input style="border:2px solid Green; border-radius:15px; width:80px;" type="submit" name="login" value="login">
						</div>
                        
                          
                        
                        
					</form>
				</div>
			</div>	
		</div>
        
        <div class="clear"></div>
  
<!-- Begin Footer -->
<div class="footer-wrapper" style="margin-top:140px">

</div>
<div class="site-generator-wrapper">
	<div class="site-generator">All rights reserved. Copyright 2014</div>
</div>
<!-- End Footer --> 



<script type="text/javascript" src="../javascript/scripts.js"></script>   
        
	</body>
</html>
