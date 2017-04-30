<style>
body{
	background-image:url(images/page.jpeg)}
	.bc_f{
		background-color:#CCC;}

</style>
<?php 
//require_once('html_content_page/header.php');

?>
<?php 

$json = file_get_contents('http://api.wunderground.com/api/f1d7c3f73327490e/geolookup/q/autoip.json');
$obj = json_decode($json);
//echo $obj->access_token;

//print_r($obj->{'location'}->{'lat'});

//print_r($obj);
?>
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
        width:70%;
		
        /*top:280px;*/
        /*left:500px;*/
      }
       /*html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }*/
	  #Header_photo{
		  
		  position: fixed; top: 0px; bottom: 0; left:600px; right: 50;
		  
		  height:220;
		  }
	  
     </style>
<img src="images/theme_header_img.png" id="Header_photo"></img>

<div id="map_wrap" style="position: absolute; top: 250px; bottom: 0; left: 50px; right: 0;"> 
   
            <div id="map">
            

</div>
    
                </div>
<div id="log" style="display:none"></div>
 <script>
     // This example requires the Places library. Include the libraries=places
     // parameter when you first load the API. For example:
     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

     function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
             center: { lat: <?php echo $obj->{'location'}->{'lat'}?>, lng: <?php echo $obj->{'location'}->{'lon'}?> },
             zoom: 15
         });

         var infowindow = new google.maps.InfoWindow();
         var service = new google.maps.places.PlacesService(map);

         service.getDetails({
             placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
         }, function (place, status) {
             if (status === google.maps.places.PlacesServiceStatus.OK) {
                 //var marker = new google.maps.Marker({
                 //    map: map,
                 //    position: place.geometry.location
                 //});
                 //google.maps.event.addListener(marker, 'click', function () {
                 //    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                 //      'Place ID: ' + place.place_id + '<br>' +
                 //      'Position: '+place.
                 //      place.formatted_address + '</div>');
                 //    infowindow.open(map, this);
                 //});
             }
         });

//         google.maps.event.addListener(
//        map, "dbclick", function (
//                overlay, latlng, overlaylatlng
//        ) {
//            // var point = new GLatLng( latlng.y, latlng.x ); 
//            //document.getElementById("log").innerHTML = 
//            map.getCenter().toString();
//            document.getElementById("log").innerHTML = '|' +
//map.getCenter().lat().toFixed(6) + ' |' +
//map.getCenter().lng().toFixed(6);
         //        });

         google.maps.event.addListener(map, "click", function (e) {
             document.getElementById("log").innerHTML  = e.latLng.lat().toFixed(6)
             + ' |' + e.latLng.lng().toFixed(6);
			 var lng=e.latLng.lng().toFixed(5);
			 var lat=e.latLng.lat().toFixed(5); 
			 //alert(lat);
			 document.getElementById("lng").value=lng;
			 document.getElementById("lat").value=lat;
			
         });
     }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuwYgqEldl_mDTc3MOTljtJRr0YLakIEo&callback=initMap&libraries=places&sensor=false">
    </script>
<form action="infraviolet.php" method="get" class="bc_f">
<label for="age">Enter Your Age</label>
<input type="number" name="age" required id="age"  value="" placeholder="Enter Age..." ><br/><br/>
<label for="gender">Select Gender</label>
<select name="gender">
<option value="M">Male</option>
<option value="F">Female</option>
</select><br/><br/>
<label for="last_exposure_sun">Last Exposure to Sun/Sea</label>
<input required type="date" name="last_exposure_sun" id="age"  value="" placeholder="Enter Last Exposure to sun/sea..." size="35" ><br/><br/>
<label for="lng">Longitude(ReadOnly):</label>
<input type="text" name="lng" id="lng"  value="<?php echo $obj->{'location'}->{'lon'}?>" ><br/>
<label for="lat">Latitude(ReadOnly):</label>
<input type="text" name="lat" id="lat"  value="<?php echo $obj->{'location'}->{'lat'}?>">

<br/>
<label for="skin_color">Upload Pic. of your Skin</label>
<input type="file" name="skin_color"  placeholder="upload Pic. of your Skin">
<br/>
<label for="skin_color_check">Confirm Your Skin Color: </label>
<select name="skin_color_check">
<option value="white_burners">white (burners)</option>
<option value="naturally_black">naturally black</option>
<option value="white_tanners">white (tanners)</option>
<option value="naturally_brown">naturally brown</option>

</select>
<style>
.protect_me{
	
	width:100px;
	height:20px;
	font-size:16px;
	color:#F00;}
</style>
<input name="Protect_Me" class="protect_me" type="submit" value="Protect Me">
</form>


<?php 
//require_once('html_content_page/footer.php');

?>