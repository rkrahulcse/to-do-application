<?php
		session_start();
		if(!$_SESSION['logged-in'])
		 { 
			header('Location:login.php');
			}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>To Do Application</title>
<link type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-image:url(back.jpg)">
<?php 
$a = $_POST['email'];
$b = $_POST['password'];
$username="0fe_14675964";
$password="rahu061440";
$database="0fe_14675964_desto";
$con = mysqli_connect("sql109.0fees.us",$username,$password);
@mysqli_select_db($con,$database) or die( "Unable to select database");
  $result1 = mysqli_query($con,"select * from register where `Email-id` = '$a' and Password = sha('$b')");
  $row = mysqli_num_rows($result1);
  if($row==0)
  {
	  
	  echo "<h3 align=\"center\" style=\"color:#903\"> INVALID USERNAME/PASSWORD        <a href=\"login.php\">GoBack</a></h3>";

	  }
	  else
	  {
		session_start();
		$_SESSION['logged-in'] = 1;
		header('Location:login2.php');
		}
		mysqli_close($con);
  ?>
  <br /><br />
         <br /><br />
         <p align="center" style="color:#903; font-size:20px">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
