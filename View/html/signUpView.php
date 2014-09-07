<?php
    include ('C:\wamp\www\GreenCity\Controller\signUpController.php');

?>





<html>
<head>

<title>Sign Up</title>
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

<!-- Begin Header -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Begin Logo -->
		<div class="logo">
		    <a href="indexView.php">
				<img src="../Resource/images/logo.png" alt="" />
			</a>
	    </div>
		<!-- End Logo -->
	<!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
                    <li><a href="indexView.php">Home</a></li>
					<li><a href="blogView.php">Blog</a></li>
					<li  class="active"><a href="signUpView.php">Be Our Member</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="logInView.php">Log In</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<!-- End Menu -->
	</div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper">

<div class="intro"> Green City is a Bloging website. Here members can write about pollution of any places in Bangladesh. </div>

<ul class="social">
<li><a class="facebook" href="#"></a></li><li><a class="twitter" href="#"></a></li><li><a class="flickr" href="#"></a></li><li><a class="linkedin" href="#"></a></li></ul>


<div class="content">	
<!-- Begin Sidebar -->
<div class="sidebar box">

	
	<div class="sidebox widget">

        <form id="commentform" action="signUpView.php" method="post">
       
                 <p class="comment-form-author">
					 <br><label for="author">User Name</label> <span class="required">*</span></br>
					 <input id="author" name="name" type="text" value="" size="30" aria-required='true' />
				  </p>
                   <div>
                              <?php
										if($nameflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter User Name</p>';
										

										}else if($nameflag == 3){
											echo '<p class="prepand1" style="color:red;">Please Enter an unique User Name</p>';
										}
									
									
							?>
                        
                            </div>
                  
                  <p class="comment-form-author">
					 <label for="author">Email</label> <span class="required">*</span>
					 <input id="author" name="email" type="text" value="" size="30" aria-required='true' />
				  </p>
                   <div>
                              <?php
										if($emailflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter Email</p>';
										

										}else if($emailflag == 3){
											echo '<p class="prepand1" style="color:red;">Wrong Email address</p>';
											
										}
									
									
							?>
                        
                            </div>
                  
                   <p class="comment-form-author">
					 <label for="author">Password</label> <span class="required">*</span>
					 <input id="author" name="password" type="password" value="" size="30" aria-required='true' />
				  </p>
                    <?php
										if($passflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter Password</p>';
										

										}
									
									
							?>
                  
                   <p class="comment-form-author">
					 <label for="author">Conferm Password</label> <span class="required">*</span>
					 <input id="author" name="conpass" type="password" value="" size="30" aria-required='true' />
				  </p>
                    <?php
										if($conpassflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter Conferm Password</p>';
										

										}
									
									
							?>
                  
                  
                  <p class="form-submit" align="center">
                  <br> </br>
					  <input name="submit" type="submit" id="submit" value="Sign Up" />
				  </p>

    
		</form>
        
        
        
        
        
        
        
	</div>
	

   
</div> 
</div>     
<!--End Sidebar -->
<div class="clear"></div>

</div>
<!-- End Wrapper -->


<!-- Begin Footer -->
<div class="footer-wrapper">

</div>
<div class="site-generator-wrapper">
	<div class="site-generator">All rights reserved. Copyright 2014</div>
</div>
<!-- End Footer --> 

<script type="text/javascript" src="../javascript/scripts.js"></script>
</body>
</html>
