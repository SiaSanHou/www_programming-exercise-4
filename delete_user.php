<html>
<head>
<title>Data Updated</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<style>
	body{
		background-color: #8FD7FF;
		margin:0;
		padding:0;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	}
	.nav{
		background-color: #051183;
		padding: 10px;
	}
	.nav a{
		text-decoration:none;
		font-size: 17px;
		color: #fff;
		padding:12px;
	}
	.nav a:hover{
		background:#fff;
		color:black;
		transition:0.6s;
	}
	/*div.logo{
		position: relative;
	}*/
</style>

<body>
<table width="100%" height="339" border="0" align="center" bordercolor="#000000">
  <tr bordercolor="#FFFFFF"> 
    <!--<td width="80" rowspan="3" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><img src="baner.jpg" width="150" height="100"></td>-->
    <td height="104" colspan="5" align="center" valign="top" bordercolor="#000000"><img src="baner.jpg" width="700" height="100"></td>
 <!--   <td width="80" rowspan="3" align="center" bgcolor="#FFFFFF"><img src="baner.jpg" width="150" height="100"></td>-->
  </tr>
  <tr> 
    <td height="23" colspan="5" align="center" valign="top" bordercolor="#000000" bgcolor="#FFCC66"><div align="center"><font size="4" >
<div class = "nav">
&nbsp;|| <a href="home.php">&nbsp;HOME</a>
&nbsp;|| <a href="car_list.php">&nbsp;List of Car Rental</a> 
&nbsp;|| <a href="register.php">&nbsp;Register New Car</a> 
&nbsp;|| <a href="delete_car.php">&nbsp;Delete Car Rental</a> 
&nbsp;|| <a href="edit_car.php">&nbsp;Search Car Rental</a>
&nbsp;|| <a href="logout.php">&nbsp;Log Out</a>
&nbsp;||</div>
</font></div></td>
  </tr>
  <tr>
    <td height="202" colspan="5" align="center" valign="top" bordercolor="#000000" bgcolor="#FFCC66">

	  <p>
        <?php
		//request nilai id
		$IDno = $_REQUEST['ID'];
			
		//database		
		$connect=mysqli_connect('localhost','root','');
  		mysqli_select_db($connect, 'exercise 2');
		$SQLcommand = "DELETE FROM exercise WHERE `car plate`='$IDno'";
		$result = mysqli_query($connect, $SQLcommand);

			mysqli_close($connect);
			
			if($result){
				echo ' <p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>FAIled!! Please Try Again.</strong></font></p>';
				
				
		   //when not duplicate data
			}else{
			   echo ' <p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Car Data have been Deleted. TQ.</strong></font></p>';
			}
      ?>
	    
      </p></td>
  </tr>
</table>
<font color="#FFFFFF"></font> 
</body>
</html>
