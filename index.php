<!DOCTYPE html>
<html lang = "en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body >

<div class="navbar"> 
<a href="#home">Home</a>
<a href="#aboutus">AboutUs</a>
<a href="#contact">Contact</a>  
</div>
<br>

  <h2 > 
<?php
 date_default_timezone_set("Africa/Lagos");
 echo date("H:i:s", time()).
 "<br>";
 echo date("Y/m/d");
?>
</h2>
</body>
</html>
  