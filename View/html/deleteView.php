<?php

include ('C:\wamp\www\GreenCity\Controller\fullPostController.php');


?>

<html>
<head>

<title>Delete Post</title>
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
		    <a href="index.php">
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

<div align="center" style="font-size:30px; color:#C00; margin-bottom: 40px"><br> Do you really want ot DELETE this post ? </br></div>

<ul class="intro">
        
    <?php
		if(isset($num) && ($num > 0)){
		while($row_article=mysql_fetch_assoc($result)){
		?>        
         
<a href="../../Controller/deleteController.php?articleid=<?= $row_article['artid']; ?>" class="button green">Done</a>
<a href="adminView.php" class="button green">Cancle</a></ul>
	
	<!-- Begin Main Image -->
	<div class="main-image">
		<div class="outer">
			<span class="inset"><img src="../Resource/images/<?= $row_article['img'];?>" alt="" /></span>
		</div>
	</div>
	<!-- End Main Image --> 





<!-- Begin Container -->
<div class="box">

		<!-- Begin Post -->
		<div class="post format-image box"> 

			<div class="bar">
				<span class="likes"> Posted By : <?= $row_article['name']; ?></span>
              </div>
		
			<h1 class="title"><?= $row_article['title']; ?></h1>
			<p><?=$row_article['comments'];?></p>
		
			<div class="tags"><a href="#">Category : <?= $row_article['category']; ?> Pollution</a></div>	
			
			<div class="post-nav">
				<span class="nav-next">Date of Post : <?= $row_article['date_posted']; ?></span>
				<div class="clear"></div>
			</div>

		</div>
         <?php
		}
		}else{ ?>
        
        <td><p>There are no articles available at present</p></td></tr>
		
        <?php	
		}
	  ?> 

		<!-- End Post --> 	

</div>
<!-- End Container -->
	

<div class="clear"></div>

</div>
<!-- End Wrapper -->

<script type="text/javascript" src="../javascript/scripts.js"></script>
</body>
</html>
