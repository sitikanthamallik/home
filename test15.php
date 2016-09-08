<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>calculator</title>
</head>
<body>
<?php
if(isset($_GET['r']))
{
echo $_GET["r"];
}
?>
  <form method="get" action="test16.php">
  Enter the first number:<input type="text" name="f"/>
  <br/>
  Enter the second number:<input type="text" name="s"/>
  <br/>
  <input type="submit" name="add" value="ADD"/>
  <input type="submit" name="sub" value="SUBTRACT"/>
</form>
</body>
</html>