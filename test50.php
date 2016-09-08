<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript" src="jquery-1.9.1.js">
</script>
<script type="text/javascript">
  $(document).ready(function() {
   
$("#b").click(function() {
       
	   var i=parseInt($("#f").val());
	   var j=parseInt($("#s").val());
	   
	   $.ajax(
	   {url:"add.php",
	   type:"GET",
	   data:{f:i,s:j},
	   success:function(res)
	   {  $("#lit").html(res);
	   }
	     });
		
    });
});
</script>
</head>
<body>
fno:<input type="text" id="f"/>
<br/>
sno:<input type="text" id="s"/>
<br/>
<input type="button" value="add" id="b"/>
<br/>
<div id="lit"></div>

<body>
</body>
</html>