<?php

$usuario = 'root';
$senha = 'Sen@c2023';
$database = 'pet_house';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>