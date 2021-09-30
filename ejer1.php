<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio1</title>
</head>
<body>

<?php
if (isset($_GET["cad"])){

	$frase = $_GET["cad"];

	for ($i=0; $i <strlen($frase) ; $i++) {

		if ($frase[$i] != ''){

			echo $frase[$i]."<br>";
		}
		
	}

}else{
	echo "falta la frase";
}
?>
</body>
</html>