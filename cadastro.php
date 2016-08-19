<?php include("paginas/processamento_banco.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#000000">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Cadastro - alert.Me</title>
        <link rel="shortcut icon" type="image/png" href="img/icon_television.png"/>
        <link rel="stylesheet" href="css/frameworks/tether.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap.min.css">
        <link rel="stylesheet" href="css/frameworks/jquery-ui.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap-datepicker3.standalone.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-basic.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows-dark.min.css">
        <link rel="stylesheet" href="css/styles/styles.css">
        <script type="application/javascript" src="js/frameworks/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/frameworks/tether.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery-ui.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery.mask.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="application/javascript" src="js/scripts/scripts.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="cabecalho">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-dark bg-inverse navbar-full navbar-fixed-top">
                      <button class="navbar-toggler hidden-sm-up pull-xs-left pull-sm-left" type="button" data-toggle="collapse" data-target="#collapsingNavbar2" aria-controls="collapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                        &#9776;
                      </button>
                      <a class="navbar-brand hidden-sm-up pull-xs-left pull-sm-left" href="http://guilou.me"><img src="img/icon_television.png" alt="Logo" height="32" width="32"></a>
                      <a class="navbar-brand hidden-sm-up" href="">Cadastro - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                      <hr class="hidden-sm-up">    
                      <div class="collapse navbar-toggleable-xs" id="collapsingNavbar2">
                          <a class="navbar-brand hidden-xs-down" href=""><img src="img/icon_television.png" alt="Logo" height="32" width="32"></a>
                          <a class="navbar-brand hidden-xs-down" href="">Cadastro - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                          <ul class="nav navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link hidden-sm-down" href="">|<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Saiba mais sobre esse site.">
                              <a class="nav-link text-success font-weight-bold" href="#"><?=date("d-m-Y")?></a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Voltar a tela de login.">
                              <a class="nav-link text-warning font-weight-bold" href="index.php">Retornar a tela de Login</a>
                            </li>
                          </ul>
                        </div>                      
                    </nav>
                </div>
            </div>
        </section>
                
        <section id="cover-cadastro">
        <div id="cover-cadastro-caption">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3 class="display-5"><span class="text-danger font-weight-bold">a</span>lert.Me</h3>
                    <form id="form-cadastro">
                       <div class="row">
                           <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label for="txt-nome">Nome Completo</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-nome" name="txt-nome" placeholder="Nome Completo">
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                                    <label for="txt-nascimento">Nascimento</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-nascimento" name="txt-nascimento" placeholder="dd/mm/aaaa">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-7 col-sm-7 col-md-7">
                                    <label for="txt-usuario">Usuário</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-usuario" name="txt-usuario" placeholder="Nome de Usuário/Login">
                           </div>
                           <div class="col-xs-5 col-sm-5 col-md-5">
                                    <label for="txt-rua">CEP</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-cep" name="txt-cep" placeholder="CEP">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-9 col-sm-9 col-md-9">
                                   <label for="txt-rua">Rua</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-rua" name="txt-rua" placeholder="Rua">
                                    
                           </div>
                           <div class="col-xs-3 col-sm-3 col-md-3">
                                  <label for="txt-numero">Nº</label>
                                    <input type="number" class="form-control form-control-sm" id="txt-numero" name="txt-numero" placeholder="Nº">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-7 col-sm-7 col-md-7">
                                    <label for="txt-bairro">Bairro</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-bairro" name="txt-bairro" placeholder="Bairro">
                           </div>
                           <div class="col-xs-5 col-sm-5 col-md-5">
                                    <label for="txt-cidade">Cidade</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-cidade" name="txt-cidade" placeholder="Cidade">
                           </div>
                       </div>
                       <div class="row">
                          <div class="col-xs-4 col-sm-4 col-md-4">
                                    <label for="txt-estado">Estado</label>
                                    <select class="form-control form-control-sm" id="select-estado" name="select-estado">
                                        <option value="">UF</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                                    <label for="txt-telefone">Tel. Fixo</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-telefone" name="txt-telefone" placeholder="(99) 9999-9999">
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                                    <label for="txt-celular">Tel. Celular</label>
                                    <input type="text" class="form-control form-control-sm" id="txt-celular" name="txt-celular" placeholder="(99) 99999-9999">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                               <label for="txt-email">Email</label>
                               <input type="email" class="form-control form-control-sm" id="txt-email" name="txt-email" placeholder="exemplo@exemplo.com">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                    <label for="txt-senha">Senha</label>
                                    <input type="password" class="form-control form-control-sm" id="txt-senha" name="txt-senha" placeholder="Senha">
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                    <label for="txt-contrasenha">Confirmação</label>
                                    <input type="password" class="form-control form-control-sm" id="txt-contrasenha" name="txt-contrasenha" placeholder="Contrasenha">
                           </div>
                       </div>
                       <br>
                       
                       <div class="row">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                <button type="reset" class="btn btn-danger btn-block">Limpar Campos</button>    
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6">
                                <button type="button" class="btn btn-success btn-block" id="btn-cadastro">Enviar</button>    
                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <p>copyright 2016. guilou.me.</p>
                            <p>developed by <a href="http://guilou.me">Guilherme Lourenço</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <ul class="list-unstyled">
                                <li><a href="">home</a></li>
                                <li><a href="">cadastro</a></li>
                                <li><a href="">sobre</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </body>
</html>