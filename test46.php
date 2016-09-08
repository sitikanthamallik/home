<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.9.1.js">
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#h").click(function() {
        $("#lit").hide("slow");
    });;
	$("#s").click(function() {
        $("#lit").show("slow");
    });;

});
</script>
</head>
<body>
<input type="button" value="hide" id="h" />
<input type="button" value="show" id="s" />
<br/>
<img src="Chocolate Cake.bmp" width="200px" height="200px"
 id="lit" />
 </body>
</html>