<?php
define("USUARIO", "wen");
define("SENHA", "#pefrio0329");
define("BD", "testeEmilly");
define("HOST","localhost");

/*
function conexao(){
	$host = HOST;
    $user = USUARIO;
    $pass = SENHA;
    $dbname = BD;
	
    try {
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
		  ));
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		return $pdo;
	}
	*/
class Conexao {
  private $user;
  private $host;
  private $senha;
  private $banco;

  private $pdo;

  public function __construct($user=USUARIO, $host=HOST, $senha=SENHA, $banco=BD) {
	$this->user = $user;
	$this->host = $host;
	$this->senha = $senha;
	$this->banco = $banco;
	$this->conexao();
  }

  private function conexao() {
	try {
	  $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->user, $this->senha,
	  array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	  ));
	}
	catch(PDOException $e) {
	  throw $e;
	}
  }

  public function getConexao() {
	  var_dump($this->pdo);
	return $this->pdo;
  }


}
?>