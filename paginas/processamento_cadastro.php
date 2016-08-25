<?php
    include "processamento_banco.php";

    $nome = isset($_POST['txt-nome']) ? $_POST['txt-nome'] : null;
    $nascimento = isset($_POST['txt-nascimento']) ? $_POST['txt-nascimento'] : null;
    $usuario = isset($_POST['txt-usuario']) ? $_POST['txt-usuario'] : null;    
    $cep = isset($_POST['txt-cep']) ? $_POST['txt-cep'] : null;
    $rua = isset($_POST['txt-rua']) ? $_POST['txt-rua'] : null;
    $numero = isset($_POST['txt-numero']) ? $_POST['txt-numero'] : null;
    $bairro = isset($_POST['txt-bairro']) ? $_POST['txt-bairro'] : null;
    $cidade = isset($_POST['txt-cidade']) ? $_POST['txt-cidade'] : null;
    $estado = isset($_POST['select-estado']) ? $_POST['select-estado'] : null;
    $telefone = isset($_POST['txt-telefone']) ? $_POST['txt-telefone'] : null;
    $celular = isset($_POST['txt-celular']) ? $_POST['txt-celular'] : null;
    $email = isset($_POST['txt-email']) ? $_POST['txt-email'] : null;
    $senha = isset($_POST['txt-senha']) ? $_POST['txt-senha'] : null;
    $contrasenha = isset($_POST['txt-contrasenha']) ? $_POST['txt-contrasenha'] : null;
    
    //Verifica se usuário já exite cadastrado na base de dados
    $sql_usuario = "SELECT PESSOA_USUARIO FROM PESSOA WHERE PESSOA_USUARIO = '".escape_bd($usuario)."'";

     $result = mysqli_query(conecta_bd(), $sql_usuario);

     //Veirifica se existem resultados
     if(mysqli_num_rows($result) > 0){
         echo "erro_usuario_existe";
     }else{
         if($nome!=null){
            if($nascimento!=null){
                if($usuario!=null){
                    if($cep!=null){
                        if($rua!=null){
                            if($numero!=null || $numero != 0){
                                if($bairro!=null){
                                    if($cidade!=null){
                                        if($estado!=null){
                                            if($telefone!=null){
                                                if($celular!=null){
                                                    if($email!=null){
                                                        if($senha!=null){
                                                            if($contrasenha!=null){
                                                                if(($senha == $contrasenha)){
                                                                    $nome = escape_bd($nome);
                                                                    $nascimento = escape_bd($nascimento);
                                                                    $usuario = escape_bd($usuario);
                                                                    $cep = escape_bd($cep);
                                                                    $rua = escape_bd($rua);
                                                                    $numero = escape_bd($numero);
                                                                    $bairro = escape_bd($bairro);
                                                                    $cidade = escape_bd($cidade);
                                                                    $estado = escape_bd($estado);
                                                                    $telefone = escape_bd($telefone);
                                                                    $celular = escape_bd($celular);
                                                                    $email = escape_bd($email);
                                                                    $senha = escape_bd($senha);
                                                                    $contrasenha = escape_bd($contrasenha);

                                                                    $sql_pessoa = "INSERT INTO PESSOA(PESSOA_NOME, PESSOA_NASCIMENTO, PESSOA_USUARIO, PESSOA_SENHA, PESSOA_EMAIL) VALUES('{$nome}','".date('Y-m-d',strtotime(str_replace('/','-',$nascimento)))."','{$usuario}','".md5($senha)."','{$email}')";

                                                                    $conn = conecta_bd();
                                                                    mysqli_query($conn, $sql_pessoa);
                                                                    echo "success";
                                                                }else{
                                                                    echo "erro_senha_diferentes";
                                                                }
                                                            }else{
                                                                echo "erro_contrasenha";
                                                            }
                                                        }else{
                                                            echo "erro_senha";
                                                        }
                                                    }else{
                                                        echo "erro_email";
                                                    }
                                                }else{
                                                    echo "erro_celular";
                                                }
                                            }else{
                                                echo "erro_telefone";
                                            }
                                        }else{
                                            echo "erro_estado";
                                        }
                                    }else{
                                        echo "erro_cidade";
                                    }
                                }else{
                                    echo "erro_bairro";
                                }
                            }else{
                                echo "erro_numero";
                            }
                        }else{
                            echo "erro_rua";
                        }
                    }else{
                        echo "erro_cep";
                    }
                }else{
                    echo "erro_usuario";
                }
            }else{
                echo "erro_nascimento";
            }
        }else{
            echo "erro_nome";
        }
     }
?>