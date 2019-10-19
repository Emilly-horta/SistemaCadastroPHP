<!DOCTYPE html>
<html>
<head>
	<title>Teste Orientação a Objetos com PHP</title>
</head>
<body>
<?php	
class Caneta
{
 var $modelo;
 var $ponta;
 var $cor;
 var $carga;
 var $tampada;
	
	function rabiscar(){
		if ($this->tampada == true) {
			echo "erro";
		
		}else{
			echo"estar rabiscando";
		}
	}
	function tampar(){
		$this->tampada = true;
	}
	function destampar(){
		$this->tampada = false;

	}
} 
	 ?>

</body>
</html>