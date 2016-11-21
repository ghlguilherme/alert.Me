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
        <title>Mapa - alert.Me</title>
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
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQTuyFAnnO-K_BotyXc66VpNwg538J3jk&libraries=visualization&callback=initMap">
    </script>
   <script type="text/javascript">
        var map;
        var devCenter = {lat: -21.79419277346009, lng: -48.17431524395943};
        var heatmap = null;
        //este array armazena os marcadores para os alertas do mapa
        var marcadores = new Array();
       function RetornarCentro(controlDiv, map) {

          // Set CSS for the control border.
          var controlUI = document.createElement('button');
          controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
          controlUI.style.marginBottom = '22px';
          controlUI.style.marginTop = '22px';   
          controlUI.style.marginRight = '22px';   
          controlUI.style.textAlign = 'center';
          controlUI.title = 'Retornar a minha localização';
          controlUI.className = 'btn btn-success btn-sm';   
          controlDiv.appendChild(controlUI);

          // Configura CSS do botão
          var controlText = document.createElement('div');
          controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
          controlText.style.fontSize = '16px';
          controlText.style.lineHeight = '38px';
          controlText.style.paddingLeft = '5px';
          controlText.style.paddingRight = '5px';
          controlText.innerHTML = 'Onde Estou?';
          controlUI.appendChild(controlText);

          //Adicona evento de clique no botão
          controlUI.addEventListener('click', function() {
            map.setCenter(devCenter);
          });
            
        }
       
        function BotaoRetornar(controlDiv, map){
              // Cria o botão de retorno para a página home
              var controlUI = document.createElement('button');
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Retornar Home';
              controlUI.className = 'btn btn-primary btn-sm';   
              controlDiv.appendChild(controlUI);

              //Configura CSS do botão
              var controlText = document.createElement('div');
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Retornar Home';
              controlUI.appendChild(controlText);

              // Adiciona evento de clique ao botão
              controlUI.addEventListener('click', function() {
                location.href = 'home.php';
              });
        }
       
        function BotaoMapaCalor(controlDiv, map){
              //Cria o botão do mapa de calor
              var controlUI = document.createElement('button');
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Visualizar mapa de calor da região';
              controlUI.className = 'btn btn-danger btn-sm';   
              controlDiv.appendChild(controlUI);

              //Adiciona CSS no botão
              var controlText = document.createElement('div');
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Ver Mapa de Calor';
              controlUI.appendChild(controlText);

              //Evento de clique do botão
              controlUI.addEventListener('click', function() {
                toggleHeatmap();  
              });
        }
       
        function BotaoAjuda(controlDiv, map){
              //Cria o botão
              var controlUI = document.createElement('button');
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Como marcar um alerta?';
              controlUI.className = 'btn btn-info btn-sm';   
              controlDiv.appendChild(controlUI);

              //Adiciona CSS no botão
              var controlText = document.createElement('div');
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Ajuda';
              controlUI.appendChild(controlText);

              //Evento de clique do botão
              controlUI.addEventListener('click', function() {
                 alert("Clique um um local no mapa e crie um novo alerta. Você pode também visualizar informações sobre todos os alertas no mapa.");
              });
        }
       
       
        
       
        function placeMarkerAndPanTo(latLng, map) {
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon : 'http://guilou.me/alertme/img/icon-marker.png'  
              });
              map.panTo(latLng);
        }
       
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: devCenter,
            zoom: 14
          });
            
              //adiciona um evento de clique ao mapa
             map.addListener('click', function(e) {
                 placeMarkerAndPanTo(e.latLng, map);
                 location.href = "tela-novo-alerta.php?latitude="+e.latLng.lat()+"&longitude="+e.latLng.lng();
             });
            
            //teste heatmap
            exem = new Array();
            exem.push(new google.maps.LatLng(-21.79419277346009, -48.17431524395943));
            exem.push(new google.maps.LatLng(-21.796243680592056, -48.189897537231445));
            exem.push(new google.maps.LatLng(-21.797757871269397, -48.18680763244629));
            exem.push(new google.maps.LatLng(-21.80198158173062, -48.184919357299805));
            
              //Cria uma camada de mapa de calor
              heatmap = new google.maps.visualization.HeatmapLayer({
                data: exem,
                radius: 75  
              });
            
            
              //Cria div do botão de centralizar no mapa
              var centerControlDiv = document.createElement('div');
              var centerControl = new RetornarCentro(centerControlDiv, map);

            
              centerControlDiv.index = 1;
              map.controls[google.maps.ControlPosition.RIGHT_TOP].push(centerControlDiv);
            
              //Cria a div para o botão de retorno
              var retornoControlDiv = document.createElement('div');
              var retornoControl = new BotaoRetornar(retornoControlDiv, map);
            
              retornoControlDiv.index = 1;
              map.controls[google.maps.ControlPosition.RIGHT_TOP].push(retornoControlDiv);
            
              //Cria a div para botão de mapa de calor 
              var calorControlDiv = document.createElement('div');
              var calorControl = new BotaoMapaCalor(calorControlDiv, map);
            
              calorControlDiv.index = 1;
              map.controls[google.maps.ControlPosition.RIGHT_TOP].push(calorControlDiv);
            
              //Cria div para botão de ajuda
              var ajudaControlDiv = document.createElement('div');
              var ajudaControl = new BotaoAjuda(ajudaControlDiv, map);
            
              ajudaControlDiv.index = 1;
              map.controls[google.maps.ControlPosition.RIGHT_TOP].push(ajudaControlDiv);
            
              
            //Verifica se o navegador possui recurso de geolocalização e pergunta ao usuário se pode ser ativada a localização dele
            if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        //Cria objeto com latitude e longitude
                        devCenter = new google.maps.LatLng(lat, lng);
                        
                         
                    });
            }
           var marker = new google.maps.Marker({
                position: devCenter,
                map: map,
                draggable:true,
                title: 'Você está aqui!',
                icon : 'http://guilou.me/alertme/img/icon-marker-me.png'
            });
            
            var infowindow = new google.maps.InfoWindow({
                content: "Esta é sua localização atual. <br> Clique no botão 'Novo Alerta Aqui' <br>para criar um alerta neste local."
            });
            
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            
            //Aqui todos os pontos do são recuperados do banco de dados para o mapa
            //parte em PHP
            <?php
                $conn = conecta_bd();
                    
                    $sql_select_alertas = "SELECT ALERTA_ID, ALERTA_PESSOA, ALERTA_DESCRICAO, ALERTA_DATAHORA, ALERTA_LATITUDE, ALERTA_LONGITUDE, ALERTA_PESO FROM ALERTA";
                    
                    $result = mysqli_query($conn, $sql_select_alertas);
                    while($tupla = mysqli_fetch_row($result)){
                        ?>
                                    //Parte em JavaScript
                                    var marcador = {id:<?php echo $tupla[0]; ?>, usuario: '<?php echo $tupla[1]; ?>', descricao: '<?php echo $tupla[2]; ?>', datahora: '<?php echo date('d/m/Y h:i a', strtotime($tupla[3])); ?>', latitude: <?php echo $tupla[4]; ?>, longitude: <?php echo $tupla[5]; ?>, peso: <?php echo $tupla[6]; ?>};
                                    
                                    marcadores.push(marcador);
                        <?php
                    }
                    mysqli_close($conn);
            ?>
            
            //Aqui adicionaremos os marcadores diretamente no mapa
            var infowindow2 =  new google.maps.InfoWindow({
                content: ""
            });
            
            for(var i = 0; i < marcadores.length; i++){
                var ponto = {lat: marcadores[i].latitude, lng: marcadores[i].longitude};
                var marker2 = new google.maps.Marker({
                    position: ponto,
                    map: map,
                    draggable:false,
                    title: marcadores[i].descricao,
                    icon : 'http://guilou.me/alertme/img/icon-marker.png'
                });
    
                var descricao = "<div><strong>Usuário:</strong> "+marcadores[i].usuario+" <br><strong>Descrição:</strong> "+marcadores[i].descricao+" <br><strong>Data e Horário:</strong> "+marcadores[i].datahora+" <br><strong>Latitude:</strong> "+marcadores[i].latitude+" <br><strong>Longitude:</strong> "+marcadores[i].longitude+"<hr><strong>Nível de Confiança:</strong>  "+marcadores[i].peso+"<hr></div>";
                
                //Relaciona marcador com sua janela de informação
                bindInfoWindow(marker2, map, infowindow2, descricao);
                
            }
            map.setCenter(devCenter);
        }
       
        //Esta função retorna os pontos do mapa de calor
        function getPoints(){
            var points = new Array();
            for(var i = 0; i < marcadores.length; i++){
                var lat = marcadores[i].latitude;
                var lon = marcadores[i].longitude;
                points.push(new google.maps.LatLng(lat, lon));
            }
            return points;
        }
       
        //Ativa ou desativa o mapa de calor
        function toggleHeatmap() {
            heatmap.setMap(heatmap.getMap() ? null : map);
        }
       
        //Esta função permite cada marcador exibir sua própria informação
        function bindInfoWindow(marker, map, infowindow, description) {
                marker.addListener('click', function() {
                    infowindow.setContent(description);
                    infowindow.open(map, this);
                });
            }
  </script>
  </head>
  <body id="map">
  
                      
  </body>
</html>