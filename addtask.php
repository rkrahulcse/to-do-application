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
<br /><br /><br />
<form action="addtask1.php" method="post">
			
            <div style="margin-left:500px; color:#903; font-size:20px">
			<table>
			<tr>
                <td>Task</td>
				<td><input type="text" name="task" required="required" /></td>
			<tr>
			<tr></tr>
                <td>Date</td>
				<td><input align="middle" type="date" name="date" required></td>
                <td>(yyyy-mm-dd)</td>
			</tr>
			<tr></tr>
			<tr>
                <td>Priority:</td>
				<td><input type="number" name="prio" required="required" /></td>
			</tr>
			<tr></tr>
			<tr>
        		<td colspan=2><input type="submit" name="submit" id="submit" value="Register" style="margin-left:90px"/></td>
			</tr>
			</table>
            </div>
                <br /><br />
    			
    </form>
    <br /><br /><br /><br />
    <a href="logout.php">logout</a>
<p align="center" style="color:#903">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
