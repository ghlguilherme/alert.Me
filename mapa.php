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
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQTuyFAnnO-K_BotyXc66VpNwg538J3jk&callback=initMap">
    </script>
   <script type="text/javascript">
        var map;
        var devCenter = {lat: -21.784, lng: -48.178};
       
       function RetornarCentro(controlDiv, map) {

          // Set CSS for the control border.
          var controlUI = document.createElement('button');
          //controlUI.style.backgroundColor = '#fff';
          //controlUI.style.border = '2px solid #fff';
          //controlUI.style.borderRadius = '3px';
          controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
          //controlUI.style.cursor = 'pointer';
          controlUI.style.marginBottom = '22px';
          controlUI.style.marginTop = '22px';   
          controlUI.style.marginRight = '22px';   
          controlUI.style.textAlign = 'center';
          controlUI.title = 'Retornar a minha localização';
          controlUI.className = 'btn btn-success btn-sm';   
          controlDiv.appendChild(controlUI);

          // Set CSS for the control interior.
          var controlText = document.createElement('div');
          //controlText.style.color = 'rgb(25,25,25)';
          controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
          controlText.style.fontSize = '16px';
          controlText.style.lineHeight = '38px';
          controlText.style.paddingLeft = '5px';
          controlText.style.paddingRight = '5px';
          controlText.innerHTML = 'Onde Estou?';
          controlUI.appendChild(controlText);

          // Setup the click event listeners: simply set the map to Chicago.
          controlUI.addEventListener('click', function() {
            map.setCenter(devCenter);
          });
            
        }
       
        function BotaoRetornar(controlDiv, map){
              // Set CSS for the control border.
              var controlUI = document.createElement('button');
              //controlUI.style.backgroundColor = '#fff';
              //controlUI.style.border = '2px solid #fff';
              //controlUI.style.borderRadius = '3px';
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              //controlUI.style.cursor = 'pointer';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Retornar Home';
              controlUI.className = 'btn btn-primary btn-sm';   
              controlDiv.appendChild(controlUI);

              // Set CSS for the control interior.
              var controlText = document.createElement('div');
              //controlText.style.color = 'rgb(25,25,25)';
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Retornar Home';
              controlUI.appendChild(controlText);

              // Setup the click event listeners: simply set the map to Chicago.
              controlUI.addEventListener('click', function() {
                location.href = 'home.php';
              });
        }
       
        function BotaoMapaCalor(controlDiv, map){
              // Set CSS for the control border.
              var controlUI = document.createElement('button');
              //controlUI.style.backgroundColor = '#fff';
              //controlUI.style.border = '2px solid #fff';
              //controlUI.style.borderRadius = '3px';
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              //controlUI.style.cursor = 'pointer';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Visualizar mapa de calor da região';
              controlUI.className = 'btn btn-danger btn-sm';   
              controlDiv.appendChild(controlUI);

              // Set CSS for the control interior.
              var controlText = document.createElement('div');
              //controlText.style.color = 'rgb(25,25,25)';
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Ver Mapa de Calor';
              controlUI.appendChild(controlText);

              // Setup the click event listeners: simply set the map to Chicago.
              controlUI.addEventListener('click', function() {
                //ação aqui
              });
        }
       
        function BotaoAjuda(controlDiv, map){
              // Set CSS for the control border.
              var controlUI = document.createElement('button');
              //controlUI.style.backgroundColor = '#fff';
              //controlUI.style.border = '2px solid #fff';
              //controlUI.style.borderRadius = '3px';
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              //controlUI.style.cursor = 'pointer';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Como marcar um alerta?';
              controlUI.className = 'btn btn-info btn-sm';   
              controlDiv.appendChild(controlUI);

              // Set CSS for the control interior.
              var controlText = document.createElement('div');
              //controlText.style.color = 'rgb(25,25,25)';
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Ajuda';
              controlUI.appendChild(controlText);

              // Setup the click event listeners: simply set the map to Chicago.
              controlUI.addEventListener('click', function() {
                 alert("Clique um um local no mapa e crie um novo alerta. Você pode também visualizar informações sobre todos os alertas no mapa.");
              });
        }
       
        function BotaoAlertaAqui(controlDiv, map){
              // Set CSS for the control border.
              var controlUI = document.createElement('button');
              //controlUI.style.backgroundColor = '#fff';
              //controlUI.style.border = '2px solid #fff';
              //controlUI.style.borderRadius = '3px';
              controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
              //controlUI.style.cursor = 'pointer';
              controlUI.style.marginBottom = '22px';
              controlUI.style.marginTop = '1px';   
              controlUI.style.marginRight = '22px';   
              controlUI.style.marginLeft = '22px'; 
              controlUI.style.textAlign = 'center';
              controlUI.title = 'Criar alerta aqui';
              controlUI.className = 'btn btn-warning btn-sm';   
              controlDiv.appendChild(controlUI);

              // Set CSS for the control interior.
              var controlText = document.createElement('div');
              //controlText.style.color = 'rgb(25,25,25)';
              controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
              controlText.style.fontSize = '16px';
              controlText.style.lineHeight = '38px';
              controlText.style.paddingLeft = '5px';
              controlText.style.paddingRight = '5px';
              controlText.innerHTML = 'Novo alerta aqui!';
              controlUI.appendChild(controlText);

              // Setup the click event listeners: simply set the map to Chicago.
              controlUI.addEventListener('click', function() {
                 
              });
        }
       
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: devCenter,
            zoom: 14
          });
            
              // Create the DIV to hold the control and call the CenterControl() constructor
              // passing in this DIV.
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
            
              //Cria div para botão de ajuda
              var novoAlertaControlDiv = document.createElement('div');
              var novoAlertaControl = new BotaoAlertaAqui(novoAlertaControlDiv, map);
            
              novoAlertaControlDiv.index = 1;
              map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(novoAlertaControlDiv);
              
            
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
                icon : 'http://guilou.me/alertme/img/icon-marker.png'
            });
            
            var infowindow = new google.maps.InfoWindow({
                content: 'Esta é sua localização atual.'
            });
            
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            map.setCenter(devCenter);   
            //alert('Escolha um local no mapa, os botões laterais podem te auxiliar :)');
        }
  </script>
  </head>
  <body id="map">
  
                      
  </body>
</html>