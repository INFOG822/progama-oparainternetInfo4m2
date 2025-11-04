<?php
$host = 'localhost';
$usuario = 'root';
$senha ='';
$databese= 'login';

$conn = new mysqli ( $host, $usuario, $senha, $databese);
if ($conn->connect_error){
    die ("conexão falhou");
}

?>