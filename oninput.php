<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function show()
{
	var i=parseInt(document.getElementById("fno")).value;
	var j=parseInt(document.getElementById("sno")).value;
	var r=i+j;
document.getElementById("res").value=r;
}
</script>
</head>

<body>
<form oninput="show()">
<input type="text" id="fno"/>
<br/>
<input type="text" id="sno"/>
<br/>
<input type="text" id="res" />
</form>
</body>
</html>