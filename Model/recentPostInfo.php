 <?php
 
include ('C:\wamp\www\SEGreenCity\Controller\connectionController.php');

$query="Select *,COUNT(*) FROM article INNER JOIN categories ON categoryID=catid WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) GROUP BY date_posted DESC LIMIT 10 ";

$blog = mysql_query($query) or die(mysql_error());
$num_blog = mysql_num_rows($blog);
?>
