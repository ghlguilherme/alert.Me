<?php 
    include("paginas/processamento_banco.php");
    if(isset($_SESSION['usuario-usuario'])){
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#000000">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Login - alert.Me</title>
        <link rel="shortcut icon" type="image/png" href="img/icon_television.png"/>
        <link rel="stylesheet" href="css/frameworks/tether.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap.min.css">
        <link rel="stylesheet" href="css/frameworks/jquery-ui.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-basic.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows.min.css">
        <link rel="stylesheet" href="css/frameworks/tether-theme-arrows-dark.min.css">
        <link rel="stylesheet" href="css/frameworks/bootstrap-datepicker3.standalone.min.css">
        <link rel="stylesheet" href="css/styles/styles.css">
        <script type="application/javascript" src="js/frameworks/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/frameworks/tether.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery-ui.min.js"></script>
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
                      <a class="navbar-brand hidden-sm-up pull-xs-left pull-sm-left" href=""><img src="img/icon_television.png" alt="Logo" height="32" width="32"></a>
                      <a class="navbar-brand hidden-sm-up" href="">Login - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                      <hr class="hidden-sm-up">    
                      <div class="collapse navbar-toggleable-xs" id="collapsingNavbar2">
                          <a class="navbar-brand hidden-xs-down" href=""><img src="img/icon_television.png" alt="Logo" height="32" width="32"></a>
                          <a class="navbar-brand hidden-xs-down" href="">Login - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                          <ul class="nav navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link hidden-sm-down" href="">|<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Saiba mais sobre esse site.">
                              <a class="nav-link text-success font-weight-bold" href="#"><?=date("d-m-Y")?></a>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Saiba mais sobre esse site.">
                              <a class="nav-link text-info font-weight-bold" href="#" data-toggle="modal" data-target="#modal-sobre">Sobre o site</a>
                            </li>
                          </ul>
                        </div>                      
                    </nav>
                </div>
            </div>
        </section>
                
        <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="display-3"><span class="text-danger font-weight-bold">a</span>lert.Me</h1>
                    <p>Não seja pego de surpresa faça login e descubra os lugares que você deve evitar </p>
                    <form id="form-login">
                        <div class="form-group">
                            <label class="sr-only">Usuário</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Usuário" name="txt-usuario" id="txt-usuario-login" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Senha</label>
                            <input type="password" class="form-control form-control-lg" placeholder="Senha" name="txt-senha" id="txt-senha-login">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-lg" id="btn-login">Login</button>
                            <button type="button" class="btn btn-primary btn-lg" onclick="location.href='cadastro.php'">Cadastro</button>
                        </div>
                        <div class="form-group">
                            <a href="" class="text-warning font-weight-bold" data-toggle="modal" data-target="#modal-esqueceu">Esqueceu usuário ou senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <p>copyright 2016. guilou.me.</p>
                            <p>developed by <a href="http://guilou.me">Guilherme Lourenço</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
    <!-- Modal Esqueceu-->
    <div class="modal fade" id="modal-esqueceu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="label-modal-esqueceu">Esqueceu usuário ou senha?</h4>
          </div>
          <div class="modal-body">
              <label for="txt-email-recuperar">Digite seu email cadastrado para recuperar seus dados.</label>
              <input type="email" class="form-control form-sm" placeholder="Email" id="txt-email-recuperar">
          </div>
          <div class="modal-footer">
            <button type="button" id="btn-recuperar-senha" class="btn btn-success">Recuperar</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>