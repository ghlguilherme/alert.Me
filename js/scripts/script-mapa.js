//Script para plotagem do mapa
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('area-mapa'), {
    center: {lat: -21.784, lng: -48.178},
    zoom: 14
  });
}