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
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -21.784, lng: -48.178},
            zoom: 14
          });
        }
   </script>
     <style type="text/css">
      #map { height: 400px; width: 350px }
    </style>
  </head>
  <body>
     <div class="container">
        <br>
         <div class="row">
             <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                     <div id="map"></div>
                        
                    </div>
                </div>
             </div>
         </div>
     </div>          
              
               
          
   
    
    
    
  </body>
</html>