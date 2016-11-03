<?php
    //Criação da sessão
    session_start();
    //Definição do fuso horário
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

    function atualiza_sessao($user){
        //Obtém todos os dados do usuário os coloca disponíveis na sessão
        $pessoa_id = null;
        $nome = null;
        $nascimento = null;
        $usuario = null;
        $email = null;
        $cep = null;
        $rua = null;
        $numero = null;
        $bairro = null;
        $cidade = null;
        $estado = null;
        $telefone = null;
        $celular = null;
        
        $sql_select_pessoa = "SELECT PESSOA_ID, PESSOA_NOME, PESSOA_NASCIMENTO, PESSOA_USUARIO, PESSOA_EMAIL FROM PESSOA WHERE PESSOA_USUARIO = '{$user}'";
        
        //Obtém conexão com o banco de dados
        $conn = conecta_bd();
        
        $result = mysqli_query($conn, $sql_select_pessoa);
        
        while($tupla = mysqli_fetch_row($result)){
            $pessoa_id = $tupla[0];
            $nome = $tupla[1];
            $nascimento = date("d/m/Y",strtotime($tupla[2]));
            $usuario = $tupla[3];
            $email = $tupla[4];
            
         }
        
        $sql_select_endereco = "SELECT PESSOAENDERECO_CEP, PESSOAENDERECO_RUA, PESSOAENDERECO_NUMERO, PESSOAENDERECO_BAIRRO, PESSOAENDERECO_CIDADE, PESSOAENDERECO_ESTADO FROM PESSOAENDERECO WHERE PESSOAENDERECO_PESSOA = {$pessoa_id}";
        
        $result = mysqli_query($conn, $sql_select_endereco);
        
        while($tupla = mysqli_fetch_row($result)){
            $cep = $tupla[0];
            $rua = $tupla[1];
            $numero = $tupla[2];
            $bairro = $tupla[3];
            $cidade = $tupla[4];
            $estado = $tupla[5];
        }
        
        $sql_select_contato_telefone = "SELECT PESSOACONTATO_CONTATO FROM PESSOACONTATO WHERE PESSOACONTATO_PESSOA = {$pessoa_id} AND PESSOACONTATO_TIPO = 'F'";
        
        $result = mysqli_query($conn, $sql_select_contato_telefone);
        
        while($tupla = mysqli_fetch_row($result)){
            $telefone = $tupla[0];
        }
        
        $sql_select_contato_celular = "SELECT PESSOACONTATO_CONTATO FROM PESSOACONTATO WHERE PESSOACONTATO_PESSOA = {$pessoa_id} AND PESSOACONTATO_TIPO = 'C'";
        
        $result = mysqli_query($conn, $sql_select_contato_celular);
        
        while($tupla = mysqli_fetch_row($result)){
            $celular = $tupla[0];
        }
        
        //Registrando todos os dados do usuário na sessão 
        $_SESSION['usuario-nome'] = $nome;
        $_SESSION['usuario-nascimento'] = $nascimento;
        $_SESSION['usuario-usuario'] = $usuario;
        $_SESSION['usuario-email'] = $email;
        $_SESSION['usuario-cep'] = $cep;
        $_SESSION['usuario-rua'] = $rua;
        $_SESSION['usuario-numero'] = $numero;
        $_SESSION['usuario-bairro'] = $bairro;
        $_SESSION['usuario-cidade'] = $cidade;
        $_SESSION['usuario-estado'] = $estado;
        $_SESSION['usuario-telefone'] = $telefone;
        $_SESSION['usuario-celular'] = $celular;
        
        mysqli_close($conn);
    }
?>