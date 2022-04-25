<html>
<body>
<a href="exercise 3.php">&nbsp;home</a> 

</body>
</html>
<?php
	
			include ("config.php");
		    
            $userid= $_POST['userid'];
			$name= $_POST['name'];
			$password= $_POST['password'];
						
			$connect=mysqli_connect('localhost','root','');
  			mysqli_select_db($connect,'exercise 3');
			$SQLcommand = "INSERT INTO `user`(`userid`, `name`, `password` ) VALUES('$userid','$name', '$password') ";
						
			$result = mysqli_query($connect, $SQLcommand);
			mysqli_close($connect);
		  
		  //when duplicate data
			if(!$result){
				echo ' <p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Duplicate ID Please Try Again.</strong></font></p>';
				
				
		   //when not duplicate data
			}else{
			   echo ' <p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Car details have been saved. TQ.</strong></font></p>';
			}
		  

      ?>