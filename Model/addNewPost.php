<?php

		
		
		if (isset($_FILES['image']['tmp_name'])) {

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"C:/wamp/www/GreenCity/View/Resource/images/" . $_FILES["image"]["name"]);
				$imageflag = 1;
				
								
	}else{
		  $imageflag = 2;
	}

		
	 $catagory = $_POST['Catagory'];	
		
if($titleflag == 1 && $postflag == 1 && $imageflag == 1){

$query = "INSERT INTO article SET name='$nm',title='$title',comments='".$_POST['post']."',";
$query .="date_posted=NOW(),categoryId='$catagory',img='".$_FILES["image"]["name"]."'";
$insert = mysql_query($query);
echo'<script type="text/javascript">
				alert("Posted Successfully");
			</script>';
header("location:adminView.php");
	exit();	
}
else{

echo mysql_error();

}





?>
