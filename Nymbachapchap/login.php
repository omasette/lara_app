<?php
 require_once 'database.php';
 require_once 'loginprocess.php';
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN PAGE</title>
</head>
<center>
<body>
<form method="post">
Username: <input type= "text" name="Username" /> <br /><br />
password: <input type="password" name="Password" /> <br /><br />
User_ID: <input type="text" name="user_ID" /> <br /><br />
<input type="submit" name="submit" value="log In" />
</form>
</body>
</center>
</html>
