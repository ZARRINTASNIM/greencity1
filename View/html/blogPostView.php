<?php
include ('C:\wamp\www\GreenCity\Controller\connectionController.php');
include('C:\wamp\www\GreenCity\Model\getArticleInfo.php');
include('C:\wamp\www\GreenCity\Model\getRecentPostInfo.php');
?>

<html>
<head>

<title>Blog Post</title>
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
					<li><a href="blogView.php">Blog</a></li>
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

	<!-- Begin Main Image -->
	<div class="main-image">
		<div class="outer">
			<span class="inset"><img src="../Resource/images/3.jpg" alt="" /></span>
		</div>
	</div>
	<!-- End Main Image --> 





<!-- Begin Container -->
<div class="content">

		<!-- Begin Post -->
		<div class="post format-image box"> 

			<div class="bar">
				<span class="icon-image">September 26, 2012</span>
				<span class="comments"><a href="#">3</a></span>
			</div>
		
			<h1 class="title">Morning Glory</h1>
			<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of autumn which I enjoy with my whole heart.</p>
		
			<div class="tags"><a href="#">journal</a>, <a href="#">photography</a> </div>	
			
			<div class="post-nav">
				<span class="nav-prev"><a href="#">&larr; Rock Paper Scissors Lizard Spock</a></span>
				<span class="nav-next"><a href="#">Charming Winter &rarr;</a></span>
				<div class="clear"></div>
			</div>

		</div>
		<!-- End Post --> 	
	
		<!-- Begin Comment Wrapper -->
		<div id="comment-wrapper" class="box">
		  
		  <!-- Begin Comments -->
		  <div id="comments">
	            
			<h3 id="comments-title">3 Responses to "Morning Glory"</h3>
	    
	        <ol id="singlecomments" class="commentlist">
	      	<li class="comment">
				<div class="comment">
					<div class="comment-author vcard user frame">
						<img alt="" src='http://1.gravatar.com/avatar/30b2dad884c817cb09ad5fa61dad7e44?s=70&amp;d=retro&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />
					</div>
					<div class="message">
						<span class="reply-link"><a class="comment-reply-link" href="#">Reply</a></span>
						<div class="info">
							<h2>Marshall Eriksen</h2>
							<span class="meta">September 13, 2012 at 12:32 pm</span>
						</div>
						<div class="comment-body ">
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.</p>
						</div>
						<span class="edit-link"></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</li>
			<li class="comment">
				<div class="comment">
					<div class="comment-author vcard user frame">
						<img alt="" src='http://0.gravatar.com/avatar/2876eddf6bce8c3f8527990c2d115c99?s=70&amp;d=retro&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />
					</div>
					<div class="message">
						<span class="reply-link"><a class="comment-reply-link" href="#">Reply</a></span>
						<div class="info">
							<h2>Laura</h2>
							<span class="meta">September 13, 2012 at 1:26 pm</span>
						</div>
						<div class="comment-body ">
							<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>
						<span class="edit-link"></span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			
					<ul class='children'>
						<li class="comment even depth-2" id="li-comment-5">
							<div id="comment-5" class="com-wrap">
								<div class="comment-author vcard user frame">
									<img alt='' src='http://0.gravatar.com/avatar/6a81b453436b12149e7d6d109f4acb66?s=70&amp;d=retro&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />			</div><!-- .comment-author .vcard -->
								<div class="message">
									<span class="reply-link"><a class='comment-reply-link' href='/obscura-wp/morning-glory/?replytocom=5#respond' onclick='return addComment.moveForm("comment-5", "5", "respond", "16")'>Reply</a></span>
									<div class="info">
										<h2>Jason</h2>					<span class="meta">
											September 13, 2012 at 1:27 pm					</span><!-- .comment-meta .commentmetadata -->
									</div>
									<div class="comment-body ">
										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor.</p>
									</div>
													<span class="edit-link"></span>
								</div>
								<div class="clear"></div>
							</div><!-- #comment-##  -->
							<div class="clear"></div>
						</li>
					</ul>
				</li>
			</ol>
		</div>
		<!-- End Comments -->
	
		<!-- Begin Form -->
		<div id="comment-form" class="comment-form">
		
			<div id="respond">
						<h3 id="reply-title">Leave a Reply</h3>
						
						<form action="#" method="post" id="commentform">
							<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
							
							<p class="comment-form-author">
								<label for="author">Name</label> <span class="required">*</span>
								<input id="author" name="author" type="text" value="" size="30" aria-required='true' />
							</p>
							<p class="comment-form-email">
								<label for="email">Email</label> <span class="required">*</span>
								<input id="email" name="email" type="text" value="" size="30" aria-required='true' />
							</p>
							<p class="comment-form-url">
								<label for="url">Website</label>
								<input id="url" name="url" type="text" value="" size="30" />
							</p>
							<p class="comment-form-comment">
								<label for="comment">Comment</label>
								<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
							</p>
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Post Comment" />
							</p>
						</form>
			</div><!-- #respond -->	
	  	
		</div>
		<!-- End Form -->	
		
		
		</div>	
		<!-- End Comment Wrapper -->

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
