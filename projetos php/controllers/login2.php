<?php
session_start();
include ('login.php');

//verifica se os campos usuario e senha estão vazios, e caso afirmativo ele redireciona pra a index2
if(empty($_POST['usuario']) || empty($_POST['senha']))	{
	header('Location: index2.php');
	exit();
}
//livra de ataque de mysql injection, ajudando na segurança
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit(); //limpa o cabeçalho
}else{
	$_SESSION['nao autenticado'] = true;
	header('Location: index2.php');
	exit();

}


