<?php

if($pass == $con){
        if($nameflag == 1 && $emailflag == 1 && $passflag == 1 && $conpassflag == 1)
        {
        	$query1="Select * FROM user where uname='$name'";
			
			$signup = mysql_query($query1) or die(mysql_error());
            $num = mysql_num_rows($signup);
			if($num > 0){
				$nameflag = 3;
				echo'<script type="text/javascript">
				alert("User Name already exist. Please enter an unique User Name");
			</script>';
			}else{
			
			$query = "INSERT INTO user SET uname='$name',pw='$pass',email='$email',";
			$query .="date_joined=NOW()";
			$insert = mysql_query($query);
			echo'<script type="text/javascript">
				alert("Sign Up Successfully");
			</script>';
			}
		
        }	
		
		}else{
			
			echo'<script type="text/javascript">
				alert("password and comferm password is not same");
			</script>';
		}




?>
