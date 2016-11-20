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
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4"></div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                  <div id="map">
                      
                  </div>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4"></div>
          </div>
      </div>
               
        <script>
            var map;
            //Define o centro principal do mapa como minha casa por padrão
            var devCenter = {lat: -21.784, lng: -48.178};
            function initMap() {
              map = new google.maps.Map(document.getElementById('area-mapa'), {
                center: devCenter,
                zoom: 14
              });
                
                
             //adiciona um evento de clique ao mapa
             map.addListener('click', function(e) {
                 placeMarkerAndPanTo(e.latLng, map);
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
            
            function placeMarkerAndPanTo(latLng, map) {
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon : 'http://guilou.me/alertme/img/icon-marker.png'  
              });
              map.panTo(latLng);
            }
            function resizeMap(){
                google.maps.event.trigger(map, "resize");
            }
        </script>
          
   
    
    
    
  </body>
</html>