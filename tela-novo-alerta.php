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
        <meta name="viewport" content="width=device-width, initial-scale=0.65">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Novo Alerta - alert.Me</title>
        <link rel="shortcut icon" type="image/png" href="img/icon_television.png"/>
        <link rel="stylesheet" href="css/frameworks/bootstrap.min.css">
        <link rel="stylesheet" href="css/frameworks/jquery-ui.min.css">
        <link rel="stylesheet" href="css/frameworks/font-awesome.css">
        <link rel="stylesheet" href="css/styles/style_home.css">
        <script type="application/javascript" src="js/frameworks/jquery-3.1.0.min.js"></script>
        <script type="application/javascript" src="js/frameworks/bootstrap.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery-ui.min.js"></script>
        <script type="application/javascript" src="js/frameworks/jquery.mask.min.js"></script>
        <script type="application/javascript" src="js/frameworks/font-awesome.js"></script>
        <script type="application/javascript" src="js/scripts/script_home.js"></script>
        <script type="application/javascript" src="js/scripts/script-novo-alerta.js"></script>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-1 col-sm-1 col-md-1"></div>
              <div class="col-xs-10 col-sm-10 col-md-10">
                 <form id="form-novo-alerta">
                      <div class="row">
                          <br>
                          <h4 class="display-5">Criação de novo alerta</h4>
                          <br>
                      </div>
                      <div class="row">
                            <div class="form-group">
                                <label for="alerta-descricao">Descrição do Alerta:</label>
                                <input type="text" class="form-control" id="alerta-descricao" aria-describedby="descricao-help" placeholder="Descrição" name="alerta-descricao">
                                <small id="descricao-help" class="form-text text-muted">Descreva o que está acontecendo.</small>
                            </div>
                      </div>
                      <div class="row">
                            <div class="form-group">
                                <label for="alerta-horario">Horário do Alerta:</label>
                                <input type="text" class="form-control" id="alerta-horario" aria-describedby="horario-help" placeholder="Horário" name="alerta-horario" value="<?php echo date('d/m/Y h:i:s a', time());?>" readonly>
                                <small id="horario-help" class="form-text text-muted">Horário em que o alerta foi inserido.</small>
                            </div>
                      </div>
                      <div class="row">
                            <div class="form-group">
                                <label for="alerta-latitude">Latitude do Alerta:</label>
                                <input type="text" class="form-control" id="alerta-latitude" aria-describedby="latitude-help" placeholder="Latitude" name="alerta-latitude" value="<?php echo $_GET['latitude']; ?>" readonly>
                                <small id="latitude-help" class="form-text text-muted">Latitude do alerta no mapa.</small>
                            </div>
                      </div>
                      <div class="row">
                            <div class="form-group">
                                <label for="alerta-longitude">Longitude do Alerta:</label>
                                <input type="text" class="form-control" id="alerta-longitude" aria-describedby="longitude-help" placeholder="Longitude" name="alerta-longitude" value="<?php echo $_GET['longitude']; ?>" readonly>
                                <small id="longitude-help" class="form-text text-muted">Longitude do alerta no mapa.</small>
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="button" class="btn btn-outline-warning btn-block" onclick="location.href='mapa.php';" id="botao-voltar-home">Cancelar</button>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="button" class="btn btn-outline-success btn-block" id="botao-confirmar-alerta">Confirmar Alerta</button>
                                <input type="hidden" name="opcao" value="5">
                            </div>
                      </div>
                 </form>
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1"></div>
          </div>
      </div>
  </body>
</html>