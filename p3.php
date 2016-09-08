<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#h{height:300px;
width:400px;
background-color:#36F;
-webkit-transform:rotate(30 deg);
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$img=imagecreatefromjpeg("Desert.jpg");
imagejpeg($img,"test.jpg",100);
?>
<body>
<img src="test.jpg" width="400" height="500"/>
</body>
</html>