<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dar lavuelta a la frase</title>
</head>
<body>
	<?php

      if(isset($_GET["cad"])){

      	$frase = $_GET['cad'];

 

       for ($i=strlen($frase)-1; $i >= 0; $i--) {


       	echo $frase[$i];

       }

      }else{
      	echo"error";
      }




	?>

</body>
</html>