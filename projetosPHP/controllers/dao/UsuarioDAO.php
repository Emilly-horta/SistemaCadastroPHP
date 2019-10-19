<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); 

class UsuarioDAO {
    
    public function cadastro($usuario, $senha, $nome, $data){
        try {
            $conexao = (new Conexao())->getConexao();
            $sql = "INSERT INTO usuario(usuario, senha, nome, data) VALUES(:usuario, :senha, :nome, :data)";
            $stm = $conexao->prepare($sql);
            $stm->execute(array(
                ":usuario" => $usuario,
                ":senha" => $senha,
                ":nome" => $nome,
                ":data" => $data
            ));
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
/*
 Create table usuario(
     id int not null AUTO_INCREMENT,
     usuario varchar(50),
     senha varchar(100) not null,
     nome varchar(100) not null,
     data varchar(10) not null,
     PRIMARY KEY(id)
 );
 */
?>
