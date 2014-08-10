<?php
include ('C:\wamp\www\SEGreenCity\Controller\connectionController.php');
include('C:\wamp\www\SEGreenCity\Model\getArticleInfo.php');
include('C:\wamp\www\SEGreenCity\Model\getRecentPostInfo.php');
?>


<head>

<title>Blog</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

<script type="text/javascript" src="../javascript/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../javascript/jquery.masonry.min.js"></script>
<script type="text/javascript" src="../javascript/scripts.js"></script>

</head>
<body class="single">
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Begin Logo -->
		<div class="logo">
		    <a href="index.php">
				<img src="../Resource/images/logo.png" alt="" />
			</a>
	    </div>
		<!-- End Logo -->
	<!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
                    <li><a href="indexView.php">Home</a></li>
					<li class="active"><a href="blogView.php">Blog</a></li>
					<li><a href="signin.php">Be Our Member</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="login.php">Log In</a></li>
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


<!-- Begin Container -->
<div class="content">
		
         
     <?php 
	if($num > 0){
	while($row_articles = mysql_fetch_assoc($blogarticles)){
	?>
		<!-- Begin Image Format -->
		<div class="post format-image box"> 
			<div class="frame">
				<a href="#">
					<img src="../Resource/images/<?= $row_articles['img'];?>" alt="" />
				</a>
			</div>
           
			<h1 class="title"><a href="#"><?= $row_articles['title']; ?></a></h1>
			<p> <?= $row_articles['comments']; ?>
		
			</p>
			
			<div class="details">
				<span class="icon-image"><a href="#"><?= $row_articles['date_posted']; ?></a></span>
				<span class="comments"><a href="#"><?= $row_articles['artchild'];?></a></span>
			</div>
			
		</div>
      <?php
		}
		}else{ ?>
        
        <td><p>There are no articles available at present</p></td></tr>
		
        <?php	
		}
	  ?> 

</div>
<!-- End Container -->


	
<!-- Begin Sidebar -->
<div class="sidebar box">
  <div class="sidebox widget">
			<h3 class="widget-title">Recent Posts</h3>
            
<?php           
if($num_blog > 0)
{
while($row_blog = mysql_fetch_assoc($blog)){ ?>
            
            
			<ul>
              <li><a href="#"><?= $row_blog['title']; ?> posted in <?= $row_blog['category'] ?> pollution category on <?= $row_blog['date_posted'] ?> </a></li>
			</ul>
			
            <?php 
		}
		}else{ ?>
        <tr>
		<td><p>No topics to list</p></td>
		</tr>
		<?php } ?>
        
     </div> 
	
	<div class="sidebox widget">
		<h3 class="widget-title">Search</h3>
		<form class="searchform" method="get" action="#">
			<input type="text" name="s" value="type a title name and hit enter" onFocus="this.value=''" onBlur="this.value='type a title name and hit enter'"/>
		</form>
	</div>
	

    
	<div class="sidebox widget">
		<h3 class="widget-title">Categories</h3>
			<ul>
				<li><a href="#">Air Pollution</a></li>
				<li><a href="#">Water Pollution</a></li>
				<li><a href="#">Sound pollution</a></li>
				<li><a href="#">other Pollution</a></li>
		    </ul>
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

</body>
</html>
