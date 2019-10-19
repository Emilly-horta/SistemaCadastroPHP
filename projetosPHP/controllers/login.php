<?php

define('HOST','127.0.0.1');
define('USUARIO','emilly');
define('SENHA','emilly-pinguim');
define('DB', 'teste');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível conectar');


?>