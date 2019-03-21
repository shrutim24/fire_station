<!DOCTYPE html>
    <html> 
    <head> 
      <style type="text/css">
        

      </style>
       <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
       <title>Google Maps API v3 Directions Example</title> 
       <script type="text/javascript" 
               src="http://maps.google.com/maps/api/js?sensor=false&key=&v=3.21"></script> 


    </head> 
    <body style="font-family: Trebuchet ms; font-size: 20px; background-image: url('44.jpg');">
    <div align="center" style="padding: 30px;"> 
      <form id="calculate-route" name="calculate-route" action="#" method="get">
    <label for="txtFrom">
        Root From:</label>
    <input type="text" id="txtFrom" name="txtFrom" required="required" placeholder="Location From"
        size="35" style="font-size: 19px;" />
    &nbsp; &nbsp; &nbsp;
    <label for="txtTo">
        Root To:</label>
    <input type="text" id="txtTo" name="txtTo" required="required" placeholder="Location To"
        size="35" style="font-size: 19px;" />
    </div>
       <div style="width: 600px;">
         <div id="map" style="width: 220%; height: 550px; padding-top:40px;padding-left: 100px;padding-right: 100px "></div> 
         <div id="panel" style="width: 300px; float: right;"></div> 
       </div>
       <div>
  
        
    <br />
    <br />
    
    <p id="lblError" style="color: Red; font-size: 17px;" />
</form>
</div> 
      <!--  <script type="text/javascript"> 
    function func() {
      // body...
    
         var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
    
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom:7,
           mapTypeId: google.maps.MapTypeId.ROADMAP
         });
        
         directionsDisplay.setMap(map);
         directionsDisplay.setPanel(document.getElementById('panel'));
         var request{
          origin:document.getElementById('txtFrom').value,
          destination:origin:document.getElementById('txtTo').value,
          travelMode: google.maps.DirectionsTravelMode.DRIVING


         };
        
         // var request = {
         //    origin: 'Chicago', 
         //    destination: 'New York',
         //   travelMode: google.maps.DirectionsTravelMode.DRIVING
         //  };
    
         directionsService.route(request, function(response, status) {
           if (status == google.maps.DirectionsStatus.OK) {
             directionsDisplay.setDirections(response);
           }
         });
       }
       </script>  -->
       <script>
        google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('txtFrom'));
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
        });
        var places1 = new google.maps.places.Autocomplete(document.getElementById('txtTo'));
        google.maps.event.addListener(places1, 'place_changed', function () {
            var place1 = places1.getPlace();
        });
    });
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 18.9724, lng: 72.8319}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('txtFrom').addEventListener('change', onChangeHandler);
        document.getElementById('txtTo').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('txtFrom').value,
          destination: document.getElementById('txtTo').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCbLX4t7-yGTuQJ9EFbpAXswOKG_Hoz9js&v=3.21&callback=initMap">
    </script>

    <!-- <script type="text/javascript" 
               src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCbLX4t7-yGTuQJ9EFbpAXswOKG_Hoz9js&v=3.21"></script> 

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCbLX4t7-yGTuQJ9EFbpAXswOKG_Hoz9js&v=3.21&callback=initMap"></script>
 -->
    </body> 
    </html>