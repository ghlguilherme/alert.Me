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
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQTuyFAnnO-K_BotyXc66VpNwg538J3jk&callback=initMap">
        </script>
        <script>
            var map;
            //Define o centro principal do mapa como minha casa por padrão
            var devCenter = {lat: -21.784, lng: -48.178};
            function initMap() {
              map = new google.maps.Map(document.getElementById('area-mapa'), {
                center: devCenter,
                zoom: 14
              });
                
              if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        //Creating LatLng object with latitude and
                        //longitude.
                        //devCenter = new google.maps.LatLng(lat, lng);
                        
                         
                    });
                }
                //Insere marcador com posição local
                var marker = new google.maps.Marker({
                    position: devCenter,
                    map: map,
                    draggable:true,
                    title: 'Você está aqui!',
                    icon : 'http://guilou.me/alertme/img/icon-marker.png'
                });
                
                map.setCenter(devCenter);
            }
            function resizeMap(){
                google.maps.event.trigger(map, "resize");
            }
        </script>
        <!-- Piwik -->
        <script type="text/javascript">
          var _paq = _paq || [];
          _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
          _paq.push(["setCookieDomain", "*.alertme.guilou.me"]);
          _paq.push(["setDomains", ["*.alertme.guilou.me","*.blog.guilou.me"]]);
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="//estatisticas.guilou.me/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '2']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        </script>
<noscript><p><img src="//estatisticas.guilou.me/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
    
        <meta name="viewport" content="width=device-width, initial-scale=0.65">
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
                            <button class="dropdown-item">Meus Dados Pessoais</button>
                            <button class="dropdown-item">Meus Alertas</button>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-senha">Alterar Minha Senha</button>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-info">Sobre</button>
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
                                    <button class="dropdown-item">Meus Dados Pessoais</button>
                                    <button class="dropdown-item">Meus Alertas</button>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-senha">Alterar Minha Senha</button>
                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-info">Sobre</button>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="nav nav-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#perfil">Meu Perfil</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#mapa">Mapa</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#alertas">Alertas</a>
                              </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="jumbotron">
                                      <h1 class="display-4">Bem vindo! <i class="fa fa-smile-o" aria-hidden="true"></i></h1>
                                      <p class="lead">Esta é a sua mais nova fonte de informação sobre lugares onde você não deve estar</p>
                                      <hr class="m-y-2">
                                      <p>Nunca se sabe onde o perigo pode estar, com o alert.Me você sabe. </p>
                                      <p class="lead">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-info" role="button">Saiba mais</button>
                                      </p>
                                    </div>
                              </div>
                              <div class="tab-pane" id="perfil" role="tabpanel">
                                 <div class="area-perfil">
                                     <form id="form-perfil">
                                       <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                               <div class="input-group input-group-sm">
                                                  <label for="txt-nome-perfil" class="form-control-sm">Nome: </label>
                                                  <input type="text" class="form-control form-control-sm" id="txt-nome-perfil" name="txt-nome-perfil" placeholder="Nome" value="<?php echo $_SESSION['usuario-nome'] ?>">
                                                </div>
                                           </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-usuario-perfil" class="form-control-sm">Username: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-usuario-perfil" name="txt-usuario-perfil" placeholder="Username" value="<?php echo $_SESSION['usuario-usuario'] ?>" readonly>
                                                </div>
                                              </div>
                                          </div>   
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-email-perfil" class="form-control-sm">Email: </label>
                                                    <input type="email" class="form-control form-control-sm" id="txt-email-perfil" name="txt-email-perfil" placeholder="Email" value="<?php echo $_SESSION['usuario-email'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-nascimento-perfil" class="form-control-sm">Dt. Nascimento: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-nascimento-perfil" name="txt-nascimento-perfil" placeholder="Nascimento" value="<?php echo $_SESSION['usuario-nascimento'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6 col col-lg-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-cep-perfil" class="form-control-sm">CEP: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-cep-perfil" name="txt-cep-perfil" placeholder="CEP" value="<?php echo $_SESSION['usuario-cep'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                 <div class="input-group input-group-sm">
                                                  <label for="txt-rua-perfil" class="form-control-sm">Rua: </label>
                                                <input type="text" class="form-control form-control-sm" id="txt-rua-perfil" name="txt-rua-perfil" placeholder="Rua" value="<?php echo $_SESSION['usuario-rua'] ?>">
                                                  </div>
                                              </div>
                                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                 <div class="input-group input-group-sm">
                                                  <label for="txt-numero-perfil" class="form-control-sm">Número: </label>
                                                <input type="number" class="form-control form-control-sm" id="txt-numero-perfil" name="txt-numero-perfil" placeholder="numero" value="<?php echo $_SESSION['usuario-numero'] ?>">
                                                  </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-bairro-perfil" class="form-control-sm">Bairro: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-bairro-perfil" name="txt-bairro-perfil" placeholder="Bairro" value="<?php echo $_SESSION['usuario-bairro'] ?>">
                                                </div>
                                              </div>
                                          </div> 
                                          <div class="row">
                                              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-cidade-perfil" class="form-control-sm">Cidade: </label>
                                                    <input type="text" class="form-control form-control-sm" id="txt-cidade-perfil" name="txt-cidade-perfil" placeholder="Cidade" value="<?php echo $_SESSION['usuario-cidade'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
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
                                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-telefone-perfil" class="form-control-sm">Telefone: </label>
                                                    <input type="tel" class="form-control form-control-sm" id="txt-telefone-perfil" name="txt-telefone-perfil" placeholder="Telefone" value="<?php echo $_SESSION['usuario-telefone'] ?>">
                                                </div>
                                              </div>
                                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <div class="input-group input-group-sm">
                                                    <label for="txt-celular-perfil" class="form-control-sm">Celular: </label>
                                                    <input type="tel" class="form-control form-control-sm" id="txt-celular-perfil" name="txt-celular-perfil" placeholder="Celular" value="<?php echo $_SESSION['usuario-celular'] ?>">
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                               <br>
                                                <input id="btnRoad" type="button" class="btn btn-primary btn-sm" value="Estrada">
                                                <input id="btnSat" type="button" class="btn btn-danger btn-sm" value="Satélite">
                                                <input id="btnHyb" type="button" class="btn btn-success btn-sm" value="Híbrido">
                                                <input id="btnTer" type="button" class="btn btn-warning btn-sm" value="Terreno">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div id="area-mapa">
                                                    <!-- Área de plotagem do mapa do google maps -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="tab-pane" id="alertas" role="tabpanel">
                                    <div class="area-alertas">
                                      <section id="alertas-cabecalho">
                                         <br>
                                          <button type="button" class="btn btn-danger btn-md btn-block" data-toggle="modal" data-target="#modal-alertas">Mostrar Meus Alertas</button>
                                          <br>
                                          <button type="button" class="btn btn-success btn-md btn-block" id="btn-mostrar-mapa" onclick="location.href='mapa.php';">Mostrar mapa de alertas</button>
                                          <br>
                                      </section>
                                      <section id="alertas-corpo">
                                          <div class="card">
                                              <img class="card-img-top" src="img/fale-conosco.png" alt="Imagem fale conosco">
                                              <div class="card-block">
                                                <h4 class="card-title">Tem Dúvidas?</h4>
                                                <p class="card-text">Mande um email para nós! É simples.<br> <a href="mailto:suporte@guilou.me?Subject=Suporte" style="color:blue;">suporte@guilou.me</a><br> Ou visite nosso site.</p>
                                                <a href="https://guilou.me" class="btn btn-warning">Ir para o site</a>
                                              </div>
                                          </div>
                                      </section>
                                    </div>
                              </div>
                            </div>
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
                                <li><a href="">sobre</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
                <button type="button" id="btn-alterar-senha" class="btn btn-success">Salvar Alteração</button>
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar</button>
                <input type="hidden" name="opcao" value="3">
              </div>
            </div><!-- /.modal-content -->
           </form>       
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </section>
    <section id="secao-modal-info">
        <div class="modal fade" id="modal-info">
          <div class="modal-dialog" role="document">
           <form id="form-alterar-senha">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Sobre o alert.Me</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <p>Desenvolvido como projeto de sistema por Guilherme Henrique Lourenço</p>
                            <p>Email: guilherme@guilou.me</p>
                            <p>Email 2: ghl.guilherme@gmail.com</p>
                            <p>Novembro de 2016</p>
                            <p>alertme.guilou.me</p>
                       </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                <input type="hidden" name="opcao" value="3">
              </div>
            </div><!-- /.modal-content -->
           </form>       
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </section>
    <section id="secao-modal-alertas">
        <div class="modal fade" id="modal-alertas">
          <div class="modal-dialog modal-lg" role="document">
           <form id="form-alterar-senha">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Minhas Indicações de Alertas</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php
                                $sql_select_alertas = "SELECT ALERTA_ID, ALERTA_DESCRICAO, ALERTA_DATAHORA, ALERTA_LATITUDE, ALERTA_LONGITUDE FROM ALERTA WHERE ALERTA_PESSOA = '{$_SESSION['usuario-usuario']}'";
                                
                                //Obtém conexão com o banco de dados
                                $conn = conecta_bd();      
                                      
                                $result = mysqli_query($conn, $sql_select_alertas);     
    
                            ?>
                            <table class="table table-bordered">
                              <thead class="thead-inverse">
                                  <tr>
                                      <th>ID</th>
                                      <th>DESCRIÇÃO</th>
                                      <th>DATA/HORA</th>
                                      <!--<th>LATITUDE</th>-->
                                      <!--<th>LONGITUDE</th>-->
                                      <th>AÇÃO</th>
                                  </tr>
                              </thead>
                               <?php
                                    while($tupla = mysqli_fetch_row($result)){
                                        ?>
                                            <tr>
                                                <td><?php echo $tupla[0]; ?></td>
                                                <td><?php echo $tupla[1]; ?></td>
                                                <td><?php echo date('d/m/Y h:i a', strtotime($tupla[2]));?></td>
                                                <!--<td><?php echo number_format($tupla[3],4); ?></td>-->
                                                <!--<td><?php echo number_format($tupla[4],4); ?></td>-->
                                                <td>
                                                        <button type="button" onclick="excluirAlerta('<?php echo $tupla[0]; ?>')" class="btn btn-danger btn-sm">EXCLUIR</button>
                                                </td>
                                            </tr>
                                        <?php
                                    } 
                                ?>
                            </table>
                       </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                <input type="hidden" name="opcao" value="3">
              </div>
            </div><!-- /.modal-content -->
           </form>       
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </section>
    <button type="button" class="btn btn-danger btn-lg" id="novo-alerta">Novo Alerta</button>
        <form id="form-delete-alerta">
            <button type="button" id="botao-delete-alerta" class="btn btn-danger btn-sm"></button>
            <input type="hidden" name="delete-alerta-id" id="delete-alerta-id" value="">
            <input type="hidden" name="opcao" value="6">
        </form>
    </body>
</html>