<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
 if(isset($_GET["add"]))
  {
	 $i=$_GET["f"];
    $j=$_GET["s"];
   $res=$i+$j;
  
  }
 if(isset($_GET["sub"]))
  {
	 $i=$_GET["f"];
    $j=$_GET["s"];
   $res=$i-$j;
  }
header('Location:test15.php?r='.$res);
echo $res;
  ?>
  
  
</body>
</html>