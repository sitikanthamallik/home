<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$conn=mysql_connect($hostname,$username,$password)
    or die("connecting to mysql failed");
	if($conn)
	echo"database connected successfully
	";
mysql_close($conn);
?>

</body>
</html>