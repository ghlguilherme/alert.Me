<?php
    date_default_timezone_set('America/Sao_Paulo');

    $hostname = "localhost";
    $bancodedados = "PROJETO_ALERT";
    $usuario = "root";
    $senha = "root";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>