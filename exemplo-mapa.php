<?php
    include("paginas/processamento_banco.php");
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
        <meta name="theme-color" content="#000000">
        <link rel="icon" type="image/png" href="img/icon_television.png" sizes="192x192">
        <title>Home - alert.Me</title>
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
        <!--
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQTuyFAnnO-K_BotyXc66VpNwg538J3jk&callback=initMap">
    </script>
   <script type="text/javascript">
        var map;
        var devCenter = {lat: -21.784, lng: -48.178};
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: devCenter,
            zoom: 14
          });
            
           var marker = new google.maps.Marker({
                position: devCenter,
                map: map,
                draggable:true,
                title: 'Você está aqui!',
                icon : 'http://guilou.me/alertme/img/icon-marker.png'
            });

            map.setCenter(devCenter);    
        }
   </script>
     <style>
         #map{height: 500px; width: 500px;}
      </style>
      -->
      <script>
        var marcadores = new Array();
      </script>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-2 col-sm-2 col-md-2"></div>
              <div class="col-xs-8 col-sm-8 col-md-8">
                           <br>
                            <table class="table table-bordered">
                  <?php
                    $conn = conecta_bd();
                    
                    $sql_select_alertas = "SELECT ALERTA_ID, ALERTA_PESSOA, ALERTA_DESCRICAO, ALERTA_DATAHORA, ALERTA_LATITUDE, ALERTA_LONGITUDE FROM ALERTA";
                    
                    $result = mysqli_query($conn, $sql_select_alertas);
                    while($tupla = mysqli_fetch_row($result)){
                        ?>
                                <tr>
                                    <td><?php echo $tupla[0]; ?></td>
                                    <td><?php echo $tupla[1]; ?></td>
                                    <td><?php echo $tupla[2]; ?></td>
                                    <td><?php echo $tupla[3]; ?></td>
                                    <td><?php echo $tupla[4]; ?></td>
                                    <td><?php echo $tupla[5]; ?></td>
                                </tr>
                                <script>
                                    var marcador = {id:<?php echo $tupla[0]; ?>, usuario: '<?php echo $tupla[1]; ?>', descricao: '<?php echo $tupla[2]; ?>', datahora: '<?php echo date('d/m/Y h:i a', strtotime($tupla[3])); ?>', latitude: <?php echo $tupla[4]; ?>, longitude: <?php echo $tupla[5]; ?>};
                                    
                                    marcadores.push(marcador);
                                </script>
                        <?php
                    }
                    mysqli_close($conn);
                  ?>
                            </table>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2"></div>
          </div>
      </div>
    
  </body>
</html>