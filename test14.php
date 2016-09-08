<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 if(isset($_POST["add"]))
  {
	 $i=$_POST["f"];
    $j=$_POST["s"];
   $r=$i+$j;
   echo $r;
  }
  ?>
  <form method="post">
  Enter the first number:<input type="text" name="f"/>
  <br/>
  Enter the second number:<input type="text" name="s"/>
  <br/>
  <input type="submit" name="add"/>
  
</body>
</html>