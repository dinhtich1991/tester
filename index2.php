<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dynamic Pills</h2>
  <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
       <div id="map2"></div>
    </div>
  </div>
</div>


    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 300px;
      }
      #map2 {
        height: 350px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: {lat: 10.806889, lng: 106.706727},
          mapTypeId: 'terrain'
        });
        var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: {lat: 10.806889, lng: 106.706727},
            radius: Math.sqrt(3) * 100
        });

        var element_2 = document.getElementById('map2');
        if(element_2 !=null){
          var map2 = new google.maps.Map(element_2, {
            zoom: 16,
            center: {lat: 10.806889, lng: 106.706727},
            mapTypeId: 'terrain'
          });
          var cityCircle = new google.maps.Circle({
              strokeColor: '#FF0000',
              strokeOpacity: 0.8,
              strokeWeight: 1,
              fillColor: '#FF0000',
              fillOpacity: 0.35,
              map: map2,
              center: {lat: 10.806889, lng: 106.706727},
              radius: Math.sqrt(3) * 100
          });
        }
        
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj3tcPCIlsVC87nE2eMCEtR_W9UPF4dNA&callback=initMap">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $('a[href="#menu3"]').on('shown.bs.tab', function(e)
          {
             initMap();
          });
      }); 
    </script>
  </body>
</html>

Update (Nếu đã tồn tại file)
UP: 
1. git add --all
2. git commit -m "name"
3. git push origin master
down: 
1. git pull origin master
Download (File chưa tồn tại ở máy)
1. git clone tenfile.git