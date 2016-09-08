<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>calculator</title>
</head>

<body>
<?php
$r="";
if(isset($_GET['add']))
{
$i=$_GET['First'];
$j=$_GET['Second'];
$r=$i+$j;
echo $r;
}
if(isset($_GET['sub']))
{
$i=$_GET['First'];
$j=$_GET['Second'];
$r=$i-$j;
echo $r;
}
?>
<form method="get">
Fno<input type="text" name="First"/>
<br/>
Sno<input type="text" name="Second"/>
<br/>
<input type="submit" value="ADD" name="add"/>
<br/>
<input type="submit" value="SUB" name="sub"/>
<br/>
<input type="text" value="<?php echo $r; ?>"/>

</form>
</body>
</html>
