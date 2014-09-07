<?php

     

		if($usernameflag == 1 && $passwordflag == 1 ){
			$row = mysql_query("SELECT * FROM user WHERE uname='$username' and pw='$password'");
			$count = mysql_num_rows($row);
			if($count == 1){
				echo $count;
				header("location:adminView.php");
			}
			else{
				
				$usernameflag = 3;
                $passwordflag = 3;
			}
		}
	
	

?>
