<?php

$dsn = 	"mysql:host=localhost;dbname=testephp";
$user = 'emilly';
$pass = 'emilly-pinguim';

function getConnection(){

try {
	$pdo = new PDO($dsn,$user,$pass); 
	return $pdo;

} catch (PDOException $ex) {

	echo "Erro: ".$ex->getMessage();
	
}
}
?>