<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function b(i)
{
	if(i.value=="")
	{
		i.value=i.defaultValue;
	}
}
function f(i)
{
	if(i.value==i.defaultValue)
	{
		i.value=="";
	}
}
</script>
</head>

<body>
<input type="text" onblur="b(this)" onfocus="f(this)" value="search"/>
</body>
</html>