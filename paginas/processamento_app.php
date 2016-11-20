<?php 
    include "processamento_banco.php";
    ## Página de processamento geral da aplicação
    ## Opção 1 - Encerra sessão do usuário
    ## Opção 2 - Atualiza dados do usuário
    ## Opçao 3 - Altera a senha do usuário
    ## Opção 4 - Recupera a senha do usuário
    ## Opção 5 - Adicionar alerta ao mapa
    ## Opção 6 - Excluir alerta selecionado na tabela

    $opcao = isset($_POST['opcao']) ? $_POST['opcao'] : null;
    $opcao = intval($opcao);
    if($opcao == 1){
        # encerra a sessão do usuário e retorna mensagem de sucesso
        encerra_sessao();
        echo "success";
    }else if($opcao == 2){
        
        #Informações a serem atualizadas da tela de visualização e alteração do perfil
        $nome = isset($_POST['txt-nome-perfil']) ? $_POST['txt-nome-perfil'] : null;
        $nascimento = isset($_POST['txt-nascimento-perfil']) ? $_POST['txt-nascimento-perfil'] : null;
        $usuario = isset($_POST['txt-usuario-perfil']) ? $_POST['txt-usuario-perfil'] : null;
        $email = isset($_POST['txt-email-perfil']) ? $_POST['txt-email-perfil'] : null;
        $cep = isset($_POST['txt-cep-perfil']) ? $_POST['txt-cep-perfil'] : null;
        $rua = isset($_POST['txt-rua-perfil']) ? $_POST['txt-rua-perfil'] : null;
        $numero = isset($_POST['txt-numero-perfil']) ? $_POST['txt-numero-perfil'] : null;
        $bairro = isset($_POST['txt-bairro-perfil']) ? $_POST['txt-bairro-perfil'] : null;
        $cidade = isset($_POST['txt-cidade-perfil']) ? $_POST['txt-cidade-perfil'] : null;
        $estado = isset($_POST['select-estado-perfil']) ? $_POST['select-estado-perfil'] : null;
        $telefone = isset($_POST['txt-telefone-perfil']) ? $_POST['txt-telefone-perfil'] : null;
        $celular = isset($_POST['txt-celular-perfil']) ? $_POST['txt-celular-perfil'] : null;
        
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
                                                                    $nome = escape_bd($nome);
                                                                    $nascimento = escape_bd($nascimento);
                                                                    $usuario = escape_bd($usuario);
                                                                    $cep = escape_bd($cep);
                                                                    $rua = strtoupper(escape_bd($rua));
                                                                    $numero = escape_bd($numero);
                                                                    $bairro = strtoupper(escape_bd($bairro));
                                                                    $cidade = strtoupper(escape_bd($cidade));
                                                                    $estado = strtoupper(escape_bd($estado));
                                                                    $telefone = escape_bd($telefone);
                                                                    $celular = escape_bd($celular);
                                                                    $email = escape_bd($email);
                                                                    
                                                                    //retirando caracteres do cep, telefone e celular
                                                                    $cep = str_replace('-','',$cep);
                                                                    $telefone = str_replace('-','',$telefone);
                                                                    $telefone = str_replace('(','',$telefone);
                                                                    $telefone = str_replace(')','',$telefone);
                                                                    $telefone = str_replace(' ','',$telefone);
                                                                    $celular = str_replace('-','',$celular);
                                                                    $celular = str_replace('(','',$celular);
                                                                    $celular = str_replace(')','',$celular);
                                                                    $celular = str_replace(' ','',$celular);

                                                                    //Guarda conexão com o banco de dados
                                                                    $conn = conecta_bd();
                                                                    
                                                                    //Atualizando dados da tabela pessoa
                                                                    $sql_update_pessoa = "UPDATE PESSOA SET PESSOA_NOME = '{$nome}', PESSOA_NASCIMENTO = '".date('Y-m-d',strtotime(str_replace('/','-',$nascimento)))."', PESSOA_EMAIL = '{$email}' WHERE PESSOA_USUARIO = '{$usuario}'";
                                                                    

                                                                    if(mysqli_query($conn, $sql_update_pessoa)){
                                                                        //Obter o id da pessoa adicionada 
                                                                        $sql_pessoa_id = "SELECT PESSOA_ID FROM PESSOA WHERE PESSOA_USUARIO = '{$usuario}'";
                                                                        
                                                                        $result = mysqli_query($conn, $sql_pessoa_id);
                                                                        
                                                                        $pessoa_id = null;
                                                                        while($tupla = mysqli_fetch_row($result)){
                                                                             $pessoa_id = $tupla[0];
                                                                         }
                                                                        $pessoa_id = intval($pessoa_id);
                                                                        if($pessoa_id > 0){
                                                                            //Atualiza os dados do endereço da pessoa
                                                                            $sql_update_pessoa_endereco = "UPDATE PESSOAENDERECO SET PESSOAENDERECO_CEP = '{$cep}', PESSOAENDERECO_RUA = '{$rua}', PESSOAENDERECO_NUMERO = '{$numero}', PESSOAENDERECO_BAIRRO = '{$bairro}', PESSOAENDERECO_CIDADE = '{$cidade}', PESSOAENDERECO_ESTADO = '{$estado}' WHERE PESSOAENDERECO_PESSOA = {$pessoa_id}";
                                                                            
                                                                            if(mysqli_query($conn, $sql_update_pessoa_endereco)){
                                                                                
                                                                                //Atualiza dados de contato da pessoa
                                                                                $sql_update_telefone = "UPDATE PESSOACONTATO SET PESSOACONTATO_CONTATO = '{$telefone}' WHERE PESSOACONTATO_PESSOA = {$pessoa_id} AND PESSOACONTATO_TIPO = 'F'";
                                                                                
                                                                                $sql_update_celular = "UPDATE PESSOACONTATO SET PESSOACONTATO_CONTATO = '{$celular}' WHERE PESSOACONTATO_PESSOA = {$pessoa_id} AND PESSOACONTATO_TIPO = 'C'";
                                                                                
                                                                                mysqli_query($conn, $sql_update_telefone);
                                                                                mysqli_query($conn, $sql_update_celular);
                                                                                
                                                                                mysqli_close($conn);
                                                                                atualiza_sessao($usuario);
                                                                                echo "success";
                                                                            }else{
                                                                                mysqli_rollback($conn);
                                                                                echo "erro_update_endereco";
                                                                            }
                                                                        }
                                                                    }else{
                                                                        mysqli_rollback($conn);
                                                                        echo "erro_update_pessoa";
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
        
        
    }else if($opcao == 3){
        //Operação de alteração da senha do usuário
        $senha = isset($_POST['senha-nova']) ? $_POST['senha-nova'] : null;
        $contrasenha = isset($_POST['senha-nova-repete']) ? $_POST['senha-nova-repete'] : null;
        
        //Validação das senhas
        if($senha != null){
            if($contrasenha != null){
                if($senha == $contrasenha){
                    $nova_senha_criptografada = md5($senha);
                    
                    $sql_update_pessoa_senha = "UPDATE PESSOA SET PESSOA_SENHA = '{$nova_senha_criptografada}' WHERE PESSOA_USUARIO = '{$_SESSION['usuario-usuario']}'";
                    
                    //Guarda conexão com o banco de dados
                    $conn = conecta_bd();
                    mysqli_query($conn, $sql_update_pessoa_senha);
                    mysqli_close($conn);
                    echo "success";
                }else{
                    echo "erro_senhas_diferentes";
                }
            }else{
                echo "erro_contrasenha";
            }
        }else{
            echo "erro_senha";
        }
        
    }else if($opcao == 4){
        //Operação de recuperação de senha do usuário
        
    }else if($opcao == 5){
        //Operação de adicionar alerta no mapa e salvar no banco de dados
        $descricao = isset($_POST['alerta-descricao']) ? $_POST['alerta-descricao'] : null;
        $latitude = isset($_POST['alerta-latitude']) ? $_POST['alerta-latitude'] : null;
        $longitude = isset($_POST['alerta-longitude']) ? $_POST['alerta-longitude'] : null;
        $usuario = $_SESSION['usuario-usuario'];
        
        if($descricao!=null && $descricao!=""){
            if($latitude!=null && $latitude!=""){
                if($longitude!=null && $longitude!=""){
                    //Insere alerta no banco de dados
                    $sql_insert_alerta = "INSERT INTO ALERTA(ALERTA_PESSOA, ALERTA_DESCRICAO, ALERTA_LATITUDE, ALERTA_LONGITUDE) VALUES('{$usuario}','{$descricao}',{$latitude},{$longitude})";
                    
                    //Guarda conexão com o banco de dados
                    $conn = conecta_bd();
                    mysqli_query($conn, $sql_insert_alerta);
                    mysqli_close($conn);
                    echo "success";
                }else{
                    echo "erro_longitude";
                }
            }else{
                echo "erro_latitude";
            }
        }else{
            echo "erro_descricao";
        }
        
        
    }else if($opcao == 6){
        //Operação de exclusão de alerta do usuário
        $alerta_id = isset($_POST['delete-alerta-id']) ? $_POST['delete-alerta-id'] : null;
        $alerta_id = intval($alerta_id);
        
        $sql_delete_alerta = "DELETE FROM ALERTA WHERE ALERTA_ID = {$alerta_id}";
        
        //Guarda conexão com o banco de dados
        $conn = conecta_bd();
        mysqli_query($conn, $sql_delete_alerta);
        mysqli_close($conn);
        echo "success";
        
    }else if($opcao == 7){
        
    }else if($opcao == 8){
        
    }else if($opcao == 9){
        
    }

    function encerra_sessao(){
        $_SESSION['usuario-nome'] = null;
        $_SESSION['usuario-nascimento'] = null;
        $_SESSION['usuario-usuario'] = null;
        $_SESSION['usuario-email'] = null;
        $_SESSION['usuario-cep'] = null;
        $_SESSION['usuario-rua'] = null;
        $_SESSION['usuario-numero'] = null;
        $_SESSION['usuario-bairro'] = null;
        $_SESSION['usuario-cidade'] = null;
        $_SESSION['usuario-estado'] = null;
        $_SESSION['usuario-telefone'] = null;
        $_SESSION['usuario-celular'] = null;
    }
?>