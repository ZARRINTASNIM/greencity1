<?php
include ('C:\wamp\www\GreenCity\Controller\connectionController.php');
include ('C:\wamp\www\GreenCity\Model\admin.php');

$nm = 'asha';
$blogarticles = mysql_query($query1) or die(mysql_error());
$num = mysql_num_rows($blogarticles);
$row_articles = '';


?>
