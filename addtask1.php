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
	<div align="center">
	<h1 align="center" style="color:#903"> Desto Creatives Solution</h1>
	<h2 align="center" style="color:#903"> To-Do Application</h2>
	</div>
<?php 
$a = $_POST['task'];
$b = $_POST['date'];
$c = $_POST['prio'];
$username="0fe_14675964";
$password="rahu061440";
$database="0fe_14675964_desto";
$con = mysqli_connect("sql109.0fees.us",$username,$password);
@mysqli_select_db($con,$database) or die( "Unable to select database");
  $result1 = mysqli_query($con,"INSERT INTO `todo` (`Todo`, `Deadline`, `Priority`) VALUES ('$a', '$b','$c')");
 header('Location:login2.php');
  ?>
        <br /><br />
         <a href="logout.php">logout</a>
         <br /><br />
        <p align="center" style="color:#903; font-size:20px">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
