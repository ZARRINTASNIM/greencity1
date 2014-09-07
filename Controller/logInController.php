<?php


$usernameflag = '';
$passwordflag = '';

	if(isset($_POST['login'])){
		if(empty($_POST['username'])){
			$usernameflag = 2;
		}
		else{
			$usernameflag = 1;
			$username = $_POST['username'];
		}
		if(empty($_POST['password'])){
			$passwordflag = 2;
		}
		else{
			$passwordflag = 1;
			$password = $_POST['password'];
		}
		
		
		include ('C:\wamp\www\GreenCity\Model\logIn.php');
		
	}
	
	
	
	
	
?>
