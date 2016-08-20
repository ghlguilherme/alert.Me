<?php
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
?>