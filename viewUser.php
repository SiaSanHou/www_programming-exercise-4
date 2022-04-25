<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
	
	<h1><font size ="5" face="Geneva, Arial, Helvetica, sans-serif">View Car Data</font></h1>
      <p>&nbsp;</p>
	  
	<?php 
                //error_reporting(E_ALL ^ E_DEPRECATED);
		   
		//request nilai id
		
		$IDno = $_REQUEST['ID'];

		//databae		
		$connect=mysqli_connect('localhost','root','');
  		mysqli_select_db($connect, 'exercise 2');
		$SQLcommand = "SELECT * FROM people WHERE id=".$IDno;

		print $SQLcommand;

		$result = mysqli_query($connect, $SQLcommand);
			
		while($row = mysqli_fetch_array($result))
		  {
			$tmpname= $row[1];
			$tmpphone= $row[2];
			$tmpdob= $row[3];			
	      }
		?>
	  
   	 
        <div align="left"><span style = "color: blue"> </span>
		<font size="2" face="Geneva, Arial, Helvetica, sans-serif">
          <table align="center" border="1" cellspacing="0" cellpadding="3">
				<tr>
                  <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">UserID:</font></td>
				  <td><?php print $IDno; ?></td>
		    </tr>				
			<tr>
                  <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name:</font></td>
				  <td><?php print $tmpname; ?></td>
		    </tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Phone:</font></td>
			    <td><?php print $tmpphone; ?></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">DOB:</font></td>
			    <td><?php print $tmpdob; ?></td></tr>
				<tr>
			
				<tr>

				
				<tr>
			  	  <td colspan="2" align="right"><p></p></td>
				</tr>
		 </table>
		</font>
          
        </div>
   	</td>
  </tr>
</table>
<font color="#FFFFFF"></font> 
</body>
</html>
