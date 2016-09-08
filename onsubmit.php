<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function show()
{
	var u=document.getElementById("uid").value;
	if(u=="")
	{
		alert("uid should not leave blank!");
		return false;
	}
	else
	
	{return true;
	}
}
</script>
</head>

<body>
<form onsubmit="return show()"action="reg.php">
enter uid<input type="text"id="uid"/>
<br/>
<input type="submit"value="register"/>
</form>
</body>
</html>