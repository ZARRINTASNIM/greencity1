<?php

   
$get="SELECT * FROM article INNER JOIN categories ON categoryID=catid WHERE artid = ".$_GET['aid']." ORDER by date_posted ASC";
if(!$r = mysql_query($get)){
echo mysql_error();
}else{
$n=mysql_num_rows($r);
}	


if(isset($n) && ($n > 0)){
		while($row_ar=mysql_fetch_assoc($r)){
			
			$nm = $row_article['name'];
			
	}
		
}	
		
if($imageflag == 1){

$query = "UPDATE article SET title='$title',comments='".$_POST['post']."',";
$query .="date_posted=NOW(),categoryId='$catagory' WHERE artid='$temp'";
$insert = mysql_query($query);
echo'<script type="text/javascript">
				alert("Edited Successfully");
			</script>';
header("location:adminView.php?aid=$nm");
	exit();	
}
else{

$query = "UPDATE article SET title='$title',comments='".$_POST['post']."',";
$query .="date_posted=NOW(),categoryId='$catagory',img='".$_FILES["image"]["name"]."' where artid='$temp'";
$insert = mysql_query($query);
echo'<script type="text/javascript">
				alert("Edited Successfully");
			</script>';
header("location:adminView.php?aid=$nm");
	exit();


}

 

	
	
	


?>
