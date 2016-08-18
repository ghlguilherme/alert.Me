<?php
    date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#000000">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Login - alert.Me</title>
        <link rel="shortcut icon" type="image/png" href="img/icon_television.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script type="application/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/jquery-ui.min.js"></script>
        <script type="application/javascript" src="js/scripts.js"></script>
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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1 class="display-3"><span class="text-danger font-weight-bold">a</span>lert.Me</h1>
                    <p>Não seja pego de surpresa faça login e descubra os lugares que você deve evitar </p>
                    <form action="">
                        <div class="form-group">
                            <label class="sr-only">Usuário</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Senha</label>
                            <input type="password" class="form-control form-control-lg" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Login</button>
                            <button type="button" class="btn btn-primary btn-lg" onclick="location.href='cadastro.php'">Cadastro</button>
                        </div>
                        <div class="form-group">
                            <a href="" class="text-warning font-weight-bold">Esqueceu usuário ou senha?</a>
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