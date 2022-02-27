<!DOCTYPE html>
<html>
    <head>
        <style>
            #map {
                height: 600px;
                width: 600px;
                }
        </style>

    </head>         

     <body>

    
            <script type="text/javascript">

            var geocoder = new google.maps.Geocoder();
            
            var address = "paris";
            // var address_arrive
            geocoder.geocode( { 'address': address}, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {
                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();
             

            } 
            console.log(latitude, longitude);
            }); 
            </script>


        <!-- div pour la map et le message -->
        <div id="map"></div>
        <div id="msg"></div>
        <script>


            //Algorithme de haversine qui calcule une distance d'un point a à b
            function haversineDistance(mk1, mk2) {
                var rad = 6371.0710; // Rayon de la Terre en kms
                var rlat1 = mk1.position.lat() * (Math.PI/180); //Convertir des degrés en radians
                var rlat2 = mk2.position.lat() * (Math.PI/180); // Convertir des degrés en radians
                var difflat = rlat2-rlat1; // Radian difference  (latitudes)
                var difflon = (mk2.position.lng()-mk1.position.lng()) * (Math.PI/180); // Radian difference (longitudes)

                var d = 2 * rad * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
                return d;
            }

            // Initialisation et ajout de la map
            var map;
            function initMap() {

                // la maps pointe sur bruxelles centre 50.855021241303085, 4.357711641357394
                const center = {lat: 50.855021241303085, lng: 4.357711641357394};
                const options = {zoom: 15, scaleControl: true, center: center};
                map = new google.maps.Map(
                    document.getElementById('map'), options);

                // Emplacements des points de repère ( modifier la longétude et lagitude de point 1 et point 2 ( adresse de depart et adresse d'arriver))
                const point1 = {lat:50.855021241303085, lng:4.357711641357394};
                const point2 = {lat:50.90527092318209 , lng: 4.48624458908589};

                // Les marqueurs pour le point1 et le point2 ->Collection de data
                var mk1 = new google.maps.Marker({position: point1, map: map});
                var mk2 = new google.maps.Marker({position: point2, map: map});



                let directionsService = new google.maps.DirectionsService();
                let directionsRenderer = new google.maps.DirectionsRenderer();

                directionsRenderer.setMap(map); // map existant affiche les directions
               
               
                // Creation de la route avec les points 1 et 2 travelmode en voiture 
                const route = {
                    origin: point1,
                    destination: point2,
                    travelMode: 'DRIVING'
                }
                
                // dessin de la ligne qui relis les 2 marqueur
                var line = new google.maps.Polyline({path: [point1, point2], map: map});

                directionsService.route(route,
                // capture directions
                
                function(response, status) {
                        if (status !== 'OK') {
                           // window.alert('Erreur :' + status);
                            return;
                        } else {
                            directionsRenderer.setDirections(response); // ajout de la  route a la map
                            var directionsData = response.routes[0].legs[0]; // prend les data de la route
                            if (!directionsData) {
                                window.alert('Directions request failed');
                                return;
                            } else {
                                document.getElementById('msg').innerHTML +=
                                " Travel distance is " + directionsData.distance.text + " (" + directionsData.duration.text + ").";
                            }
                        }
                    }
                );

                var distance = haversineDistance(mk1, mk2);
                document.getElementById('msg').innerHTML = "Distance est de  " + distance.toFixed(2) + " Kms.";

            }
//REQUEST_DENIED message d'erreur s'affiche en devloppment apres hebergement verifier que le message ne s'affiche plus a cause du https 
//https://developers.google.com/maps/documentation/places/web-service/faq
                        
                            
                        </script>
                        <!-- lien avec api de google map -->     
                         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV7Iz-8Ws79XER6GxRxNHnQmL7BBeKRi0&callback=initMap">

        </script>
    </body>
</html>