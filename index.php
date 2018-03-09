<!DOCTYPE html>
<html>
  <head>
    <title>My Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 400px;
        width: 100px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body align="center">
    <h3>Kost Tambuk, Mendungan, Pabelan, Kartasura</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var kosttambuk = {lat: -7.556184, lng: 110.777517},
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: kosttambuk
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO-9euaA1sZshI-Sn4FKrK_YKpFS4bwYM&callback=initMap"
    async defer></script>
  </body>
</html>
