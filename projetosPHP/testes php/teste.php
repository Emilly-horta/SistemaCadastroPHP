<!DOCTYPE html>
<html>
<head>
	<title>testando arquivo</title>
	<link rel="stylesheet" href="libraries/stylesheet.css">
</head>
<body>
	<h1>Olá pessoas!</h1>
	<?php
 		require_once 'Caneta.php';
 		$c1 = new Caneta;
 		$c1->cor = "Azul";
 		$c1->ponta = 0.5;
 		$c1->tampada = false;
 		$c1->destampar();
 		print_r($c1);
 		//$c1-> rabiscar();
 		echo"<br/>";
 		$c2 = new Caneta;
 		$c2->cor = "Verde";
 		$c2->carga = 50;
 		$c2->tampar();
 		print_r($c2);
 	 ?>

</body>
</html>