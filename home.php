<?php
    include("paginas/processamento_banco.php");

    if(!isset($_SESSION['usuario-usuario'])){
        header("Location: login.php");
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
        <link rel="stylesheet" href="css/styles/style_home.css">
        <script type="application/javascript" src="js/frameworks/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/frameworks/tether.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery-ui.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery.mask.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="application/javascript" src="js/scripts/script_home.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="cabecalho">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-dark bg-inverse navbar-full navbar-fixed-top">
                      <button class="navbar-toggler pull-xs-left pull-sm-left" type="button" data-toggle="collapse" data-target="#collapsingNavbar2" aria-controls="collapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                        &#9776;
                      </button>
                          <a class="navbar-brand" href="">&nbsp;&nbsp;Home - <span class="text-danger font-weight-bold">a</span>lert.Me</a>
                          <ul class="nav navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="">|<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item pull-md-right pull-lg-right">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-info"><span class="text-primary font-weight-bold">Usuário: &nbsp;&nbsp;</span> <?= $_SESSION['usuario-usuario']?></button>
                                  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Meus Dados</a>
                                    <a class="dropdown-item" href="#">Meus Alertas</a>
                                    <a class="dropdown-item" href="#">Mensagens</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Sair</a>
                                  </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                
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
                                    <div class="jumbotron">
                                      
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
    
    </body>
</html>