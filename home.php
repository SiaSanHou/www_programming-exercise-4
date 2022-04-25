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
&nbsp;||</div> </font></div></td>
  </tr>
  <tr>
    <td height="202" colspan="5" align="center" valign="top" bordercolor="#000000" bgcolor="#FFCC66">
	<marquee>  <p><font size="5" face="Verdana, Arial, Helvetica, sans-serif"><strong>Welcome to XXX Car Rental Service </strong></font></p>
	</marquee>  <p>
        <?php
                      session_start();
  include('config.php');
  error_reporting(0);

   if (!isset($_SESSION['login'])) {
       echo '<script type="text/javascript">window.location.assign("exercise 3.php");</script>';
  }
			$connect=mysqli_connect("localhost","root","");
			 if ($connect)
                               { echo "Lowest Price, Best Service, is our slogan !!!!!<p>";  }
			  else
                               { die ( "Have a great day " .mysqli_error($connect) ); }
			       
		       $select=mysqli_select_db($connect, "exercise 2");
                         if ($select)
                               { echo "Have a great day<p>"; }
                          else
                           { die("Unable to select database. ".mysqli_error($connect) ); }
	?>
	    
      </p></td>
  </tr>
</table>
</body>
</html>