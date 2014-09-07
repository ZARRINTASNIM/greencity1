<?php
    include ('C:\wamp\www\GreenCity\Controller\connectionController.php');
	
	$con = '';
	$pass = '';
	$name = '';
	$email = '';
	$nameflag='';
	$emailflag='';
	$passflag='';
	$conpassflag='';
	
	if(isset($_POST['submit'])){
		//echo 'submit';

		//Name Field empty or not validation Code
		if(empty($_POST['name'])){
        	$nameflag = 2;
			
			
        }
		else{
			$name = $_POST['name'];
	

				$nameflag = 1;
	
		}
		
	
		//Email Field empty or not Validation Code
		if(empty($_POST['email'])){
            $emailflag = 2;
			

			
        }
		else{
			$email = $_POST['email'];
			if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email)) {
				$emailflag = 1;
			}
			else{
				$emailflag = 3;	
				

				
			}
		}
		
		
	     if(empty($_POST['password'])){
        	$passflag = 2;
			
	
			
        }
		else{
		    
			$passflag = 1;
			$pass = $_POST['password'];
			  
			}
			
		
		  if(empty($_POST['conpass'])){
        	$conpassflag = 2;
	
			
        }
		else{
		    
			$conpassflag = 1;
			$con = $_POST['conpass'];
			  
			}
			
		include ('C:\wamp\www\GreenCity\Model\signUp.php');
	

	}
?>

