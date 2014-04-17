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
<form action="delete.php">
  <input type="submit" value="Delete" style="margin-left:350px; position:absolute;"/>
  </form>
<form action="complete.php">
 <input type="submit" value="Completed" style="margin-left:550px;position:absolute;"/>
</form>
<form action="addtask.php">
 <input type="submit" value="Add a Task" style="margin-left:750px;"/>
</form>
<?php 
$username="0fe_14675964";
$password="rahu061440";
$database="0fe_14675964_desto";
$con = mysqli_connect("sql109.0fees.us",$username,$password);
@mysqli_select_db($con,$database) or die( "Unable to select database");
  $result1 = mysqli_query($con,"select * from todo order by Deadline ASC");
  $num = mysqli_num_rows($result1);
  if($num==0)
  {
	echo "<div  align=\"center\" style=\"text-align: center; color:#903; font-size:24px; \">"; 
   	echo "There are no Task to do";
   	echo "</ div>";
  }
  else
  {
	while($row = mysqli_fetch_array($result1))
	{
    	$todo[] = $row['Todo'];
    	$deadline[] = $row['Deadline'];
    	$prio[] = $row['Priority'];
		$status[] = $row['status'];
		$sno[]=$row['sno'];
	}
  
  ?>

<br /><br /><br />
<div id="frm6" style="color:#FFF">
<br/><br/>
<table border='5' cellspacing='2' cellpadding='5' align="center" width="50%"> 
<tr>
<td><font face="Arial, Helvetica, sans-serif" >Task-id</font></td>
<td><font face="Arial, Helvetica, sans-serif" >Todo</font></td>
<td><font face="Arial, Helvetica, sans-serif">Deadline</font></td>
<td><font face="Arial, Helvetica, sans-serif">priority</font></td>
<td><font face="Arial, Helvetica, sans-serif" >Status</font></td>
</tr>
   <?php

   $k=0;
while($k<$num)
{
    echo "<tr>
<td><font >$sno[$k]</font></td>	
<td><font >$todo[$k]</font></td>
<td><font >$deadline[$k]</font></td>
<td><font >$prio[$k]</font></td>
<td><font >$status[$k]</font></td>
</tr>";
    $k++;
} 
  }?>
  
</table></div>
<br /><br />
         <a href="logout.php">logout</a>
         <br /><br />
<p align="center" style="color:#903">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
