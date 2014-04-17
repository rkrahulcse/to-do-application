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
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$username="0fe_14675964";
$password="rahu061440";
$database="0fe_14675964_desto";
$con = mysqli_connect("sql109.0fees.us",$username,$password);
@mysqli_select_db($con,$database) or die( "Unable to select database");
$result = mysqli_query($con,"select * from `register` where `Email-id` = '$b'");
$row = mysqli_num_rows($result);
if($row==0)
  {
mysqli_query($con,"INSERT INTO `register` (`Name`, `Email-id`, `Password`) VALUES ('$a', '$b', sha('$c'))");
?>
<div  align="center" style="text-align: center; color:#903; font-size:24px; "><?php 
   echo "You Have Successfully Registered         "; 
   echo "<a href=\"login.php\">Login</a>";
  
 }
 else
 {
?>
<div  align="center" style="text-align: center; color:#903; font-size:24px; "><?php 
   echo "This Email has Already Registered, Plese Register with Another Email           ";
   echo "<a href=\"todo.html\">GoBack</a>"; 
  
	 }
?>
</div>
<p align="center" style="color:#903">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
