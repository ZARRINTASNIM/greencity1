<?php
include ('C:\wamp\www\GreenCity\Controller\adminController.php');

?>

<html>
<head>

<title>Admin</title>
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
                    <li class="active"><a href="adminView.php">Admin</a></li>
                    <li><a href="addNewPostView.php?aid=<?=$nm;?>">Add New Post</a></li>					
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

<div class="intro"> This is the admin panel of Green City ..... </div>
<br></br>
<!-- Begin Container -->
<div class="box">
	        
        
        <div style="width:800px; position:relative; float:left; margin:0px 0px 0px 70px;"><p style="padding:0px 0px 0px 0px;">
			    <table width="100%">
							<th>Posts Title</th>
                            <th>Date Posted</th>
                            <th>Chatagory</th>
                            <th>View</th>
							<th>Edit</th>
							<th>Delete</th>
							
			  <?php 
	            if($num > 0){
	            while($row_articles = mysql_fetch_assoc($blogarticles)){
	           ?>
									<tr>
										<td><?php echo $row_articles['title'];?></td>
                                        <td><?php echo $row_articles['date_posted'];?></td>
                                        <td><?php $id = $row_articles['categoryID'] ;
										     if($id == 1){
											  echo "Water Pollution" ;
											  }
											 if ($id == 2){
											   echo "Air Pollution" ;
											 }
											  if ($id == 3){
											   echo "Sound Pollution" ;
											 }
											 if ($id == 4){
											   echo "Other Pollution" ;
											 }
											
										  ?></td>
                                        <td><a href="postView.php?aid=<?= $row_articles['artid']; ?>">View</a></td>
										<td><a href="editView.php?aid=<?= $row_articles['artid']; ?>">Edit</a></td>
										<td><a href="deleteView.php?aid=<?= $row_articles['artid']; ?>">Delete</a></td>
									    
									</tr>	
                                    
              <?php
		       }
		       }?>
        
     				
						</table>
          </div>
        

</div>
<!-- End Container -->

</div>
<!-- End Wrapper -->
	<div class="clear"></div>
<script type="text/javascript" src="../javascript/scripts.js"></script>

</body>
</html>
