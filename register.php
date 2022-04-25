	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registration Form</title>
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
	
	<h1><font size = "6" face="Geneva, Arial, Helvetica, sans-serif">Registration Form </font></h1>
      <p><font size = "3" face="Geneva, Arial, Helvetica, sans-serif">Please enter car details and click the submit button. </font></p>
   
   	  <form method = "post" action = "register_process.php"  enctype="multipart/form-data">
        <div align="left"><span style = "color: blue"> </span>
          <table align="center" border="1" cellspacing="0" cellpadding="3">
<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Car Plate Number:</font></td>
			    <td><input name="id" type="int" id="id" size="40" maxlength="50" required></td></tr>

				<tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name:</font></td>
				<td><input name="name" type="text" id="name" size="40" maxlength="50" required></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Phone:</font></td>
			    <td><input name="phone" type="tel" id="phone" size="40" maxlength="50" required></td></tr>
				<tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Date of register:</font></td>
			    <td><input name="dob" type="date" id="dob" size="40" maxlength="50" required></td></tr>
				<tr>
					
			    <tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Picture:</font></td>
			    <td><input name="image" id="image" type="file"  size="40" accept="image/x-png,image/gif,image/jpeg" maxlength="50" required></td></tr>
					<td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Video:</font></td>
			    <td><input name="file" type="file"  id="video" size="40" maxlength="50" accept="video/mp4,video/x-m4v,video/*" required ></td></tr>
				<tr>
			

				
				<tr>
				  	<td colspan="2" align="right">
						<input name="submit" type = "submit" value = "Register">
						<input name="reset" type = "reset" value = "Reset">
					<p></p></td>
				</tr>
		 </table>
          
        </div>
      </form>	</td>
  </tr>
</table>
<font color="#FFFFFF"></font> 
</body>
</html>
