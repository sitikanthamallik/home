<html>
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
if(isset($_GET['msg']))
{
$i=$_GET['First'];
$j=$_GET['Second'];
$msg=$_GET['msg'];
if($msg=="add")
{
$r=$i+$j;
}
else
{
	$r=$i-$j;
	}
echo $r;
}
?>
<form method="get">
Fno<input type="text" name="First"/>
<br/>
Sno<input type="text" name="Second"/>
<br/>
<input type="submit" value="add" name="add"/>
<br/>
<input type="submit" value="SUB" name="sub"/>
<br/>
<input type="text" value="<?php echo $r; ?>"/>

</form>
</body>
</html>
