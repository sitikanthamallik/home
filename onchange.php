<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function show(i)
{
	document.getElementById("myimg").src=i.value;
}
</script>
</head>

<body>
<select onchange="show(this)">
<option value="im\Hydrangeas.jpg">hydrangeas</option>
<option value="im\Jellyfish.jpg">jellyfish</option>
<option value="im\Desert.jpg">desert</option>
<option value="im\Koala.jpg">koala</option>

</select>
<img src="im\Hydrangeas.jpg" width="500" height="500" id="myimg"/>


</body>
</html>