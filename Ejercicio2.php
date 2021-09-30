<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
if (isset($_GET["cad"])){

	$frase = $_GET["cad"];

     $contador =0;

	for ($i=0; $i <strlen($frase) ; $i++) {

		if ((($frase[$i]>='a')&& ($frase[$i]<='z'))
			||
			(($frase[$i]<='A')&& ($frase[$i]<='Z'))){
              $contador++;
		}else{

		$letrasUnicode = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';

				if ( strstr($frase[$i], substr($letrasUnicode, 0 , 1) ) ) {   
   					$contador++;
  				}

			}

	}
     echo "la frase tiene $contador letras";
}else{
	echo "falta la frase";
}
?>
</body>
</html>