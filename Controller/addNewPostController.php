<?php
include ('C:\wamp\www\GreenCity\Controller\connectionController.php');

if(isset($_GET['aid']))
$nm=$_GET['aid'];

$titleflag = '';
$postflag = '';
$imageflag = '';
 
 if(isset($_POST['submit'])){		

		//Email Field empty or not Validation Code
		if(empty($_POST['title'])){
            $titleflag = 2;
        }
		else{
			$title = $_POST['title'];
				$titleflag = 1;			
		
		}
		


        if(empty($_POST['post'])){
            $postflag = 2;
        }
        else{
        		$postflag = 1;
        		//echo 'right';
        
        }
		
	include ('C:\wamp\www\GreenCity\Model\addNewPost.php');	
		

 }







?>
