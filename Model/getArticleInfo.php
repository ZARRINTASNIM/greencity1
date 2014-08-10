<?php
include ('C:\wamp\www\SEGreenCity\Controller\connectionController.php');

$query1="Select *,DATE_FORMAT(date_posted,'%W,%d %b %Y') as thedate FROM article INNER JOIN categories ON categoryID=catid WHERE DATE_SUB(CURDATE(),INTERVAL 30 DAY) ORDER BY date_posted DESC LIMIT 5";

$blogarticles = mysql_query($query1) or die(mysql_error());
$num = mysql_num_rows($blogarticles);
$row_articles = '';
$row_blog = '';

?>
