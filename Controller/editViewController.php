<?php
include ('C:\wamp\www\GreenCity\Controller\connectionController.php');

if(isset($_GET['aid'])){
$temp=$_GET['aid'];


$getarticle="SELECT * FROM article INNER JOIN categories ON categoryID=catid WHERE artid = ".$_GET['aid']." ORDER by date_posted ASC";
if(!$result = mysql_query($getarticle)){
echo mysql_error();
}else{
$num=mysql_num_rows($result);
}	
	

 if(isset($_POST['submit'])){		

		
		
		if (isset($_FILES['image']['tmp_name'])) {

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"C:/wamp/www/GreenCity/View/Resource/images/" . $_FILES["image"]["name"]);
				$imageflag = 1;
				
								
	}else{
		  $imageflag = 2;
	}

	$title = $_POST['title'];	
	 $catagory = $_POST['Catagory'];	
		


include ('C:\wamp\www\GreenCity\Model\editPost.php');


 }

	
	
	
}

?>
