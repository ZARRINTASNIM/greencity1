<?php
include ('C:\wamp\www\GreenCity\Controller\editPostController.php');


?>

<html>
<head>

<title>Blog</title>
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
        
        
                
         <?php
		if(isset($num) && ($num > 0)){
		while($row_article=mysql_fetch_assoc($result)){
			$id = $row_article['artid']; 
			$nm = $row_article['name'];
		?>
	<!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
                    <li><a href="adminView.php?aid=<?=$nm;?>">Admin    <?=$nm;?></a></li>
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
    
						<h3 id="reply-title">Edit Post</h3>
						
                   <form action="#" method="post" id="commentform" enctype="multipart/form-data">
                          
                          <p>   
                               
								<?php $catid=$row_article['catid']; ?>
									<label>Catagory</label>
										<select name="Catagory" style="height:30px; width:150px; color:#b9b9b9; outline:none; margin-left:20px; background:#3D3C3A;">
                                        <?php if($catid == 4){ ?>
                                            <option value="4">Other Pollution</option>
											<option value="2">Air Pollution</option> 
                                            <option value="1">Water Pollution</option>
                                            <option value="3">Sound Pollution</option>
                                            <?php
										}else if($catid == 2){?>
                                        
                                        <option value="2">Air Pollution</option>
                                        <option value="4">Other Pollution</option>
										<option value="1">Water Pollution</option>
                                        <option value="3">Sound Pollution</option>
                                        
										<?php
										}else if($catid == 3){?>
                                        
                                        <option value="3">Sound Pollution</option>
                                        <option value="2">Air Pollution</option>
                                        <option value="4">Other Pollution</option>
										<option value="1">Water Pollution</option>
                                        
                                        
										<?php
										}else if($catid == 1){?>
                                        
                                        <option value="1">Water Pollution</option>
                                        <option value="3">Sound Pollution</option>
                                        <option value="2">Air Pollution</option>
                                        <option value="4">Other Pollution</option>
								
                            
										<?php
										}?>
                                        
										</select>
									
							
                             </p>
                         
							<p class="comment-form-author">
								<label for="author">Title</label> <span class="required">*</span>
								<input id="author" name="title" type="text" value="<?= $row_article['title']; ?>" size="30" aria-required='true' />
							</p>
						 
                              
                          
                         
                        
                            
							<p class="comment-form-comment">
								<label for="comment">Post</label><span class="required"> *</span>
								<textarea id="comment" name="post"cols="45" rows="8" aria-required="true"> <?= $row_article['comments']; ?> </textarea>
							</p>
                            
                         
                         
                            <div style="margin-bottom:20px; margin-top:20px;"> Selected File is :  <?= $row_article['img']; ?>  </div>
                            
                            <p class="form-submit">
                                <label for="image">Upload another image</label><span class="required"> *</span>
								<input  style="background-color:transparent; color:#b9b9b9;"name="image"  type="file" id="submit"/>
                          
							</p>
                            
                       
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Done" />
							</p>
                            
                            
						</form>
                 
        <?php
		}
		}?>       
                        
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
