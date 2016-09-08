<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>new database</title>
</head>

<body>
<?php
$hostname="localhost";
$username="root";
$password="";
$conn=mysql_connect($hostname,$username,$password);
if(!$conn)
	{die('connecting to mysql failed'.mysql_error());
	}
if(mysql_query("CREATE DATABASE SUMAN",$conn))
{echo"database created";
	}
else
{echo"error creating database".mysql_error();
}
?>
</body>
</html>