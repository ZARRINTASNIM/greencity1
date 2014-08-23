<?php


include ('C:\wamp\www\GreenCity\Controller\connectionController.php');

 
 //retrieve the main article 
if(isset($_GET['aid'])){
$_SESSION['aid']=$_GET['aid'];

$getarticle="SELECT * FROM article INNER JOIN categories ON categoryID=catid WHERE artid = ".$_GET['aid']." ORDER by date_posted ASC";
if(!$result = mysql_query($getarticle)){
echo mysql_error();
}else{
$num=mysql_num_rows($result);
}

$getcomments="SELECT * FROM reply WHERE artid = ".$_GET['aid']." ORDER by rid ASC";
$getcomments_result = mysql_query($getcomments);
$comment_num=mysql_num_rows($getcomments_result);

}


?>
