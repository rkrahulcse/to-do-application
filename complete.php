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
			<div align="center">
            <br />
            <form action="complete1.php" method="post">
            <table align="center" cellpadding="2" cellspacing="2">
            <tr>
            <td style="color:#903;">Task Id. :</td>
            <td><input type="text" name="sno" required="required" autofocus="autofocus" /></td>
            </tr>
            </table>
            <span style="column-span:2">
            <input type="submit" value="SUBMIT" width="90px" height="40px" />
            </span>
            </form>
            <br />
            </div>
        <br />
        <br /><br />
         <a href="logout.php">logout</a>
         <br /><br />
        <p align="center" style="color:#903; font-size:20px">DESIGNED AND DEVELOPED BY RAHUL KUMAR </p>
</body>
</html>
