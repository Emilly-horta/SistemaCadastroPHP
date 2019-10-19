<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 

include dirname(__FILE__) . "/../../controllers/conexao/conexao.php";
include dirname(__FILE__) . "/../../controllers/dao/UsuarioDAO.php";

if($_POST){
    print_r($_POST);
    $user = $_POST["user"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $data = date("d/m/Y");
    $usuario = new UsuarioDAO();
    $usuario->cadastro($user, $senha, $nome, $data);
    /*
    var_dump($usuario->cadastrar($usuario, $senha, $nome, $data));
    die();
    */
}else{

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="padding: 10% 0 0 0;">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-sm"></div>
            <div class="col-sm">
            <form action="#" method="post">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" id="nome" data-checkout="cardholderName" name="nome" />
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress">Senha</label>
                    <input type="password" id="senha" class="form-control" data-checkout="cardNumber" name="senha" />
                </div>
                </div>
                <button type="submit" class="btn btn-outline-info btn-lg btn-block" >Cadastrar</button>
                <button type="reset" class="btn btn-outline-danger btn-lg btn-block" >Apagar</button>
            </form>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</body>
</html>
<?php }?>