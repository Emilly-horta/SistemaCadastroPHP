<?php

include './connection.php';

$con = getConnection();

$sql = ;

$stmt = $con->prepare($sql);
$stmt = bindValue(1,'Arroz');

?>