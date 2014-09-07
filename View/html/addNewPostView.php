<?php
include ('C:\wamp\www\GreenCity\Controller\addNewPostController.php');

?>

<html>
<head>

<title>Add New Post</title>
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
                    <li><a href="adminView.php">Admin</a></li>
					<li><a href="indexView.php">Log Out</a></li>
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



<!-- Begin Container -->
<div class="box">
	
 		<!-- Begin Form -->
		<div id="comment-form" class="comment-form">
		
			<div id="respond">
						<h3 id="reply-title">Add New Post</h3>
						
						<form action="#" method="post" id="commentform" enctype="multipart/form-data">
                          
                          <p>   
                               
								
									<label>Catagory</label>
										<select name="Catagory" style="height:30px; width:150px; color:#b9b9b9; outline:none; margin-left:20px; background:#3D3C3A;">
                                            <option value="4">Other Pollution</option>
											<option value="2">Air Pollution</option> 
                                            <option value="1">Water Pollution</option>
                                            <option value="3">Sound Pollution</option>
										</select>
									
							
                             </p>
                         
							<p class="comment-form-author">
								<label for="author">Title</label> <span class="required">*</span>
								<input id="author" name="title" type="text" value="" size="30" aria-required='true' />
							</p>
						 
                              
                             <div>
                              <?php
										if($titleflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter Title</p>';
										

										}
									
									
							?>
                        
                            </div>
                         
                        
                            
							<p class="comment-form-comment">
								<label for="comment">Post</label><span class="required"> *</span>
								<textarea id="comment" name="post" cols="45" rows="8" aria-required="true"></textarea>
							</p>
                            
                            <div>
                            <?php
										
										if($postflag == 2){
											echo '<p class="prepand1" style="color:red;">Please Enter Post </p>';
										
										}
							?>
                           </div> 
                            <div></div>
                            
                            <p class="form-submit">
                                <label for="image">Upload an image</label><span class="required"> *</span>
								<input  style="background-color:transparent; color:#b9b9b9;"name="image" type="file" id="submit"/>
                          
							</p>
                            
                            <div>
                            <?php
										
										if($imageflag == 2){
											echo '<p class="prepand1" style="color:red;">Please select an image </p>';
										
										}
							?>
                           </div> 
                            
                            
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Done" />
							</p>
                            
                            
						</form>
			</div><!-- #respond -->	
	  	
		</div>
		<!-- End Form -->	   
            
        


</div>
<!-- End Container -->

</div>
<!-- End Wrapper -->
	<div class="clear"></div>

<script type="text/javascript" src="../javascript/scripts.js"></script>
</body>
</html>
