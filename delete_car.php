<html>
<head>
<title>List of Users</title>
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
	<br>  <p><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><strong>List of Registered Cars </strong></font></p>
	  <p>
        <?php
            
			$connect=mysqli_connect('localhost','root','');
  			mysqli_select_db($connect, 'exercise 2');
			$SQLcommand = "SELECT * FROM exercise";
		  
			$result = mysqli_query($connect, $SQLcommand);
			
			print "<table width=\"500\">";
			print "<tr bgcolor=\"#DDDDDD\">";
			print "<td>Car Plate Number</td>";
			print "<td>Name</td>";
			print "<td>Phone</td>";
			print "<td>Date of register</td>";
		
			print "</tr>";
		  
			  while($row = mysqli_fetch_row($result))
			  {
				print "<tr bgcolor=\"#EEEEEE\">";
				  print "<td> $row[0] </td>";
				  print "<td> $row[1] </td>";
				  print "<td> $row[2] </td>";
				  print "<td> $row[3] </td>";
				 
				
				  print "<td>";
					  print "<a href =\"delete_user.php?ID=";
					  print $row[0] ;
					  print "\">";
					  print "[delete]";
					  print"</a>";
					  
				  print "</td>";
				  
				print "</tr>";			  
			  }
		  print "</table>";
		  mysqli_close($connect);
		?>
	    
      </p></td>
  </tr>
</table>
<font color="#FFFFFF"></font> 
</body>
</html>
