<?php
session_start();

include ('C:\wamp\www\GreenCity\Controller\connectionController.php');

$emailflag = '';
$replayflag = '';
 
 if(isset($_POST['submit'])){


		

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
		


        if(empty($_POST['comment'])){
            $replayflag = 2;
        }
        else{
        		$replayflag = 1;
        		//echo 'right';
        
        }
if($emailflag == 1 && $replayflag == 1){

$query = "INSERT INTO reply SET name='".$_POST['author']."',email='".$_POST['email']."',replay='".$_POST['comment']."',";
$query .="date=NOW(),time = NOW(),artid='".$_SESSION['aid']."'";
$insert = mysql_query($query);
echo'<script type="text/javascript">
				alert("Posted Successfully");
			</script>';

}
else{

echo mysql_error();

}

 }
 



 
?>
