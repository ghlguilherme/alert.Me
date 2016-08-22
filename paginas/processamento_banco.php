<?php
    date_default_timezone_set('America/Sao_Paulo');

    function conecta_bd(){
        $hostname = "localhost";
        $bancodedados = "ALERTMEBD";
        $usuario = "root";
        $senha = "root";

        $conn = new mysqli($hostname, $usuario, $senha, $bancodedados);
        mysqli_set_charset($conn, "utf8") or die(mysqli_error($conn));
        if ($conn->connect_errno) {
            echo "Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }
        return $conn;
    }

    function fecha_bd($conn){
        @mysqli_close($conn) or die(mysqli_error($conn));
    }

    function escape_bd($dados){
        $conn = conecta_bd();
        if(!is_array($dados)){
            $dados = mysqli_real_escape_string($conn, $dados);
        }
        fecha_bd($conn);
        return $dados;
    }
?>