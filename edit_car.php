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
	
	<h1><font face="Geneva, Arial, Helvetica, sans-serif">Editing Form </font></h1>
      <p><font size ="4" face="Geneva, Arial, Helvetica, sans-serif">Please enter car details and click the submit button. </font>
	  </p>
	  
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
		?>
	  
   	  <form method = "post" action = "edit_process.php" enctype="multipart/form-data">
        <div align="left"><span style = "color: blue"> </span>
          <table align="center" border="1" cellspacing="0" cellpadding="3">
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name:</font></td>
				<td><input name="name" type="text" id="name" value="<?php print $tmpname; ?>" size="40" maxlength="50"></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Phone:</font></td>
			    <td><input name="phone" type="text" id="phone" value="<?php print $tmpphone; ?>" size="40" maxlength="50"></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">DOB:</font></td>
			    <td><input name="dob" type="text" id="dob" value="<?php print $tmpdob; ?>" size="40" maxlength="50"></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Picture:</font></td>
			    <td><input name="image" type="file"  size="40" maxlength="50" accept="image/x-png,image/gif,image/jpeg"></td></tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Video:</font></td>
			    <td><input name="video" type="file"  id="video" size="40" maxlength="50" accept="video/*"></td></tr>
				<tr>
				<tr>
			
				<tr>
					
				<tr>
				  	<td colspan="2" align="right">
						<input name="IDno" type = "hidden" value = "<?php print $IDno; ?>">
						<input name="submit" type = "submit" value = "Update">
						<input name="reset" type = "reset" value = "Reset">
					<p></p></td>
				</tr>
		 </table>
          
        </div>
      </form>	</td>
  </tr>
</table>
</body>
</html>
