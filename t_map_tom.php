
<!DOCTYPE HTML>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Routing Map Sample | Longdo Map</title>
        <style type="text/css">
          html{
            height:100%; 
          }
          body{ 
            margin:0px;
            height:100%; 
          }
          #map {
            height: 100%;
          }
          #result {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            width: 1px;
            height: 80%;
            margin: auto;
            border: 4px solid #dddddd;
            background: #ffffff;
            overflow: auto;
            z-index: 2;
        }
        </style>

        <script type="text/javascript" src="https://api.longdo.com/map/?key=cd925698116ee0fbdf5f46ee2468067d"></script>
        <script>
          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
            map.Route.placeholder(document.getElementById('result'));
            map.Route.add(new longdo.Marker({ lon: 102.098502, lat: 12.617407 },
                { 
                    title: 'THE BEST ONE', 
                    detail: 'I\'m here' 
                }
            ));
            //12.611093, 102.076553//12.783049, 102.015996
            //map.Route.add({ lon: 101.2510574, lat: 12.6832535 });
            map.Route.add({ lon: 102.015996, lat: 12.783049 });
            map.Route.search();
          }
        </script>
    </head>
    <body onload="init();">
    <!-- div id="map" style="width:100%;height:300px;"></div -->
        <div id="map" ></div>

        <div id="result" ></div>
    </body>
  </html>
