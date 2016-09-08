<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function show()
{
var pname=document.getElementById("pname").value;
var obj;
if(window.XMLHttpRequest)
{obj=new XMLHttpRequest();
}
else
{obj=new ActiveXObject("Microsoft.XMLHTTP");
}
obj.open("get","p.php?p="+pname,false);
obj.send();

document.getElementById("dis").innerHTML=obj.responseText;
}
</script>
</head>

<body>
<input type="text" placeholder="enter the name" id="pname"/>
<br/>
<input type="button" value="search" onclick="show()"/>
<div id="dis">
</div>


</body>
</html>