<?php
session_start();
include("login.php");

//função TRIM remove o caractere de espaço das extremidades inicial e final da cadeia de caracteres

$usuario = msqli_real_escape_string($conexao,$_POST['usuario']);
$senha = msqli_real_escape_string($conexao,$_POST['senha']);
$nome = msqli_real_escape_string($conexao,$_POST['nome']);

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row ['total'] == 1) {
	$_SESSION['usuario ja existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (usuario,senha,nome,data_cadastro) VALUES ('$usuario', '$senha', '$nome',NOW())";

if ($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit;

?>

