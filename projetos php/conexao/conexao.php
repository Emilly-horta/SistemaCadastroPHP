<?php

$dsn = 	"mysql:host=localhost;dbname=testephp";
$user = 'root';
$pass = 'emillyhorta001'

function getConnection(){

try {
	$pdo = new PDO($dsn,$user,$pass); 


} catch (PDOException $ex) {

	echo "Erro: ".$ex->getMessage();
	
}
}
?>