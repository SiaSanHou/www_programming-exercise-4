<html>
<head>
<title>Update User Data</title>
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
	
	<h1><font face="Geneva, Arial, Helvetica, sans-serif">Car Detail </font></h1>
	  
     <?php 
		   
		//request nilai id
		$IDno = $_REQUEST['ID'];	
			
		//database		
		$connect=mysqli_connect('localhost','root','');
  		mysqli_select_db($connect, 'exercise 2');
	    $SQLcommand = "SELECT * FROM exercise WHERE `car plate`='$IDno'";
		$result = mysqli_query($connect, $SQLcommand);
			
		while($row = mysqli_fetch_array($result))
		  {
			$tmpname= $row[1];
			$tmpphone= $row[2];
			$tmpdob= $row[3];
			$picture= $row[4];
			$carvideo= $row[5];
		
	      }
	
		  
		  print "<table width=\"850\">";
			print "<tr bgcolor=\"#DDDDDD\">";
			print "<td>Car Plate Number</td>";
			print "<td>Name</td>";
			print "<td>Phone</td>";
			print "<td>Date of Register</td>";
			print "<td>Picture</td>	";
			print "<td>Video</td>	";
		print "</tr>";
		  
			
				print "<tr bgcolor=\"#EEEEEE\">";
				print "<td> $IDno</td>";
				print "<td> $tmpname </td>";
				print "<td> $tmpphone </td>";
				print "<td> $tmpdob </td>"; 
				//print "<td> $picture </td>";
				?>'
				<td> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($picture);  ?>"  height="100" width="100" />  </td>
				<td> <video controls src='video/<?php echo $carvideo?>' style='width:250px; height:150px;' />";</td></tr>
			
	
</td>
  </tr>
</table>
</body>
</html>
