<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
var arr=new Array("blue","red","yellow");
var i=0;
function show()
{
	document.body.bgColor=arr[i];
	i++;
	if(i ==3)
	{ i=0;
		}
	
		
	setTimeout("show()","5000");
}

</script>
</head>

<body onload="show()">

</body>
</html>