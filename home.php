<?php
    include("paginas/processamento_banco.php");

    if(!isset($_SESSION['usuario-usuario'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#000000">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Home - alert.Me</title>
        <link rel="shortcut icon" type="image/png" href="img/icon_television.png"/>
        <link rel="stylesheet" href="css/frameworks/tether.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap.min.css">
        <link rel="stylesheet" href="css/frameworks/jquery-ui.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-basic.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows-dark.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap-datepicker3.standalone.min.css">
        <link rel="stylesheet" href="css/frameworks/font-awesome.css">
        <link rel="stylesheet" href="css/styles/style_home.css">
        <script type="application/javascript" src="js/frameworks/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/frameworks/tether.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery-ui.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery.mask.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="application/javascript" src="js/frameworks/font-awesome.js"></script>
        <script type="application/javascript" src="js/scripts/script_home.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="cabecalho">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-dark bg-inverse navbar-full navbar-fixed-top">
                     
                          <button class="navbar-toggler pull-xs-left pull-sm-left" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            &#9776;
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Meus Dados Pessoais</a>
                            <a class="dropdown-item" href="#">Meus Alertas</a>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-senha">Alterar Minha Senha</button>
                            <a class="dropdown-item" href="#">Mensagens</a>
                            <div class="dropdown-divider"></div>
                            <form id="form-sair">
                                <button class="dropdown-item" id="btn-sair">Sair</button>
                                <input type="hidden" name="opcao" value="1">
                            </form>
                          </div>
                     
                          <a class="navbar-brand" href="">&nbsp;&nbsp;Home - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                          <ul class="nav navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="">|<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item pull-md-right pull-lg-right hidden-sm-down">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-info"><span class="text-primary font-weight-bold">Usuário: &nbsp;&nbsp;</span> <?= $_SESSION['usuario-usuario']?></button>
                                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Meus Dados Pessoais</a>
                                    <a class="dropdown-item" href="#">Meus Alertas</a>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-senha">Alterar Minha Senha</button>
                                    <a class="dropdown-item" href="#">Mensagens</a>
                                    <div class="dropdown-divider"></div>
                                    <form id="form-sair2">
                                        <button class="dropdown-item" id="btn-sair2">Sair</button>
                                        <input type="hidden" name="opcao" value="1">
                                    </form>
                                  </div>
                                </div>
                            </li>
                          </ul>                  
                    </nav>
                </div>
            </div>
        </section>
                
        <section id="cover">
        <div id="cover-caption">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-9">
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#perfil">Perfil</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#mapa">Mapa</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#mensagens">Mensagens</a>
                              </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="jumbotron">
                                      <h1 class="display-4">Bem vindo!</h1>
                                      <p class="lead">Esta é a sua mais nova fonte de informação sobre lugares onde você não deve estar</p>
                                      <hr class="m-y-2">
                                      <p>Nunca se sabe onde o perigo pode estar, com o alert.Me você sabe :>.</p>
                                      <p class="lead">
                                        <a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais</a>
                                      </p>
                                    </div>
                              </div>
                              <div class="tab-pane" id="perfil" role="tabpanel">
                                 <div class="area-perfil">
                                     <form id="form-perfil">
                                       <div class="container">
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                               <div class="input-group input-group-sm">
                                                  <label for="txt-nome-perfil" class="form-control-sm">Nome: </label>
                                                  <input type="text" class="form-control form-control-sm" id="txt-nome-perfil" name="txt-nome-perfil" placeholder="Nome" value="<?php echo $_SESSION['usuario-nome'] ?>">
                                                </div>
                                           </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-usuario-perfil" class="form-control-sm">Username: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-usuario-perfil" name="txt-usuario-perfil" placeholder="Username" value="<?php echo $_SESSION['usuario-usuario'] ?>" readonly>
                                                </div>
                                              </div>
                                          </div>   
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-email-perfil" class="form-control-sm">Email: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-email-perfil" name="txt-email-perfil" placeholder="Email" value="<?php echo $_SESSION['usuario-email'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                             <div class="col-xs-6 col-sm-6 col-md-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-nascimento-perfil" class="form-control-sm">Dt. Nascimento: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-nascimento-perfil" name="txt-nascimento-perfil" placeholder="Nascimento" value="<?php echo $_SESSION['usuario-nascimento'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-cep-perfil" class="form-control-sm">CEP: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-cep-perfil" name="txt-cep-perfil" placeholder="CEP" value="<?php echo $_SESSION['usuario-cep'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-8 col-sm-8 col-md-8">
                                                 <div class="input-group input-group-sm">
                                                  <label for="txt-rua-perfil" class="form-control-sm">Rua: </label>
                                                <input type="text" class="form-control form-control-sm" id="txt-rua-perfil" name="txt-rua-perfil" placeholder="Rua" value="<?php echo $_SESSION['usuario-rua'] ?>">
                                                  </div>
                                              </div>
                                              <div class="col-xs-4 col-sm-4 col-md-4">
                                                 <div class="input-group input-group-sm">
                                                  <label for="txt-numero-perfil" class="form-control-sm">Número: </label>
                                                <input type="text" class="form-control form-control-sm" id="txt-numero-perfil" name="txt-numero-perfil" placeholder="numero" value="<?php echo $_SESSION['usuario-numero'] ?>">
                                                  </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-bairro-perfil" class="form-control-sm">Bairro: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-bairro-perfil" name="txt-bairro-perfil" placeholder="Bairro" value="<?php echo $_SESSION['usuario-bairro'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-8 col-sm-8 col-md-8">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-cidade-perfil" class="form-control-sm">Cidade: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-cidade-perfil" name="txt-cidade-perfil" placeholder="Cidade" value="<?php echo $_SESSION['usuario-cidade'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-4 col-sm-4 col-md-4">
                                                  <div class="input-group input-group-sm">
                                                    <label for="select-estado-perfil" class="form-control-sm">Estado: </label>
                                                     <select class="form-control form-control-sm" id="select-estado-perfil" name="select-estado-perfil">
                                                        <option value="" <?php echo ($_SESSION['usuario-estado'] == '') ? "selected" : "" ?>>UF</option>
                                                        <option value="AC" <?php echo ($_SESSION['usuario-estado'] == 'AC') ? "selected" : "" ?>>Acre</option>
                                                        <option value="AL" <?php echo ($_SESSION['usuario-estado'] == 'AL') ? "selected" : "" ?>>Alagoas</option>
                                                        <option value="AP" <?php echo ($_SESSION['usuario-estado'] == 'AP') ? "selected" : "" ?>>Amapá</option>
                                                        <option value="AM" <?php echo ($_SESSION['usuario-estado'] == 'AM') ? "selected" : "" ?>>Amazonas</option>
                                                        <option value="BA" <?php echo ($_SESSION['usuario-estado'] == 'BA') ? "selected" : "" ?>>Bahia</option>
                                                        <option value="CE" <?php echo ($_SESSION['usuario-estado'] == 'CE') ? "selected" : "" ?>>Ceará</option>
                                                        <option value="DF" <?php echo ($_SESSION['usuario-estado'] == 'DF') ? "selected" : "" ?>>Distrito Federal</option>
                                                        <option value="ES" <?php echo ($_SESSION['usuario-estado'] == 'ES') ? "selected" : "" ?>>Espirito Santo</option>
                                                        <option value="GO" <?php echo ($_SESSION['usuario-estado'] == 'GO') ? "selected" : "" ?>>Goiás</option>
                                                        <option value="MA" <?php echo ($_SESSION['usuario-estado'] == 'MA') ? "selected" : "" ?>>Maranhão</option>
                                                        <option value="MS" <?php echo ($_SESSION['usuario-estado'] == 'MS') ? "selected" : "" ?>>Mato Grosso do Sul</option>
                                                        <option value="MT" <?php echo ($_SESSION['usuario-estado'] == 'MT') ? "selected" : "" ?>>Mato Grosso</option>
                                                        <option value="MG" <?php echo ($_SESSION['usuario-estado'] == 'MG') ? "selected" : "" ?>>Minas Gerais</option>
                                                        <option value="PA" <?php echo ($_SESSION['usuario-estado'] == 'PA') ? "selected" : "" ?>>Pará</option>
                                                        <option value="PB" <?php echo ($_SESSION['usuario-estado'] == 'PB') ? "selected" : "" ?>>Paraíba</option>
                                                        <option value="PR" <?php echo ($_SESSION['usuario-estado'] == 'PR') ? "selected" : "" ?>>Paraná</option>
                                                        <option value="PE" <?php echo ($_SESSION['usuario-estado'] == 'PE') ? "selected" : "" ?>>Pernambuco</option>
                                                        <option value="PI" <?php echo ($_SESSION['usuario-estado'] == 'PI') ? "selected" : "" ?>>Piauí</option>
                                                        <option value="RJ" <?php echo ($_SESSION['usuario-estado'] == 'RJ') ? "selected" : "" ?>>Rio de Janeiro</option>
                                                        <option value="RN" <?php echo ($_SESSION['usuario-estado'] == 'RN') ? "selected" : "" ?>>Rio Grande do Norte</option>
                                                        <option value="RS" <?php echo ($_SESSION['usuario-estado'] == 'RS') ? "selected" : "" ?>>Rio Grande do Sul</option>
                                                        <option value="RO" <?php echo ($_SESSION['usuario-estado'] == 'RO') ? "selected" : "" ?>>Rondônia</option>
                                                        <option value="RR" <?php echo ($_SESSION['usuario-estado'] == 'RR') ? "selected" : "" ?>>Roraima</option>
                                                        <option value="SC" <?php echo ($_SESSION['usuario-estado'] == 'SC') ? "selected" : "" ?>>Santa Catarina</option>
                                                        <option value="SP" <?php echo ($_SESSION['usuario-estado'] == 'SP') ? "selected" : "" ?>>São Paulo</option>
                                                        <option value="SE" <?php echo ($_SESSION['usuario-estado'] == 'SE') ? "selected" : "" ?>>Sergipe</option>
                                                        <option value="TO" <?php echo ($_SESSION['usuario-estado'] == 'TO') ? "selected" : "" ?>>Tocantins</option>
                                                    </select>
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-telefone-perfil" class="form-control-sm">Telefone: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-telefone-perfil" name="txt-telefone-perfil" placeholder="Telefone" value="<?php echo $_SESSION['usuario-telefone'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-celular-perfil" class="form-control-sm">Celular: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-celular-perfil" name="txt-celular-perfil" placeholder="Celular" value="<?php echo $_SESSION['usuario-celular'] ?>">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="input-group input-group-lg">
                                                      <br>     
                                                      <input type="hidden" name="opcao" value="2">
                                                      <button type="button" class="btn btn-success form-control" id="btn-atualizar-dados">Atualizar Dados Cadastrais</button>
                                                  </div>
                                              </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="tab-pane" id="mapa" role="tabpanel">
                                    <div class="jumbotron">
                                      
                                    </div>
                              </div>
                              <div class="tab-pane" id="mensagens" role="tabpanel">
                                    <div class="jumbotron">
                                      
                                    </div>
                              </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <section id="secao-modal">
        <div class="modal fade" id="modal-senha">
          <div class="modal-dialog" role="document">
           <form id="form-alterar-senha">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Alterar Senha</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="senha-nova" class="form-control-sm">Nova Senha: </label>
                            <div class="input-group input-group-sm">
                                <input type="password" class="form-control form-control-sm" placeholder="Senha" id="senha-nova" name="senha-nova" aria-describedby="basic-addon2">
                               <span class="input-group-btn">
                                   <button class="btn btn-secondary" type="button" id="show-password1"><i id="olho1" class="fa fa-eye" aria-hidden="true"></i></button>
                              </span>
                            </div>
                               <label for="senha-nova-repete" class="form-control-sm">Repita Senha: </label>
                            <div class="input-group input-group-sm">      
                                <input type="password" class="form-control form-control-sm" placeholder="Contrasenha" id="senha-nova-repete" name="senha-nova-repete" aria-describedby="basic-addon2">
                           
                           <span class="input-group-btn">
                               <button class="btn btn-secondary" type="button" id="show-password2"><i id="olho2" class="fa fa-eye" aria-hidden="true"></i></button>
                          </span>
                            </div>
                       </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="btn-alterar-senha" class="btn btn-success btn-sm">Salvar Alteração</button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Fechar</button>
                <input type="hidden" name="opcao" value="3">
              </div>
            </div><!-- /.modal-content -->
           </form>       
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </section>
    </body>
</html>