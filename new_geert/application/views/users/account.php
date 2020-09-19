<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/main-style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>
		#map {
			height: 500px;
  		width: 100%;
      margin-top: 30px;
    }
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		#floating-panel {
			position: absolute;
			top: 10px;
			right: 1%;
			z-index: 5;
			background-color: #fff;
			border: 1px solid #999;
			text-align: center;
		}
    .location-info p {
      font-size: 11px;
    }
     .location-info {
      margin-top: 30px;
     }
     .location-info {
    margin-top: 30px;
    height: 499px;
    overflow-y: scroll;
}
    </style>
</head>
<body>

<div class="container-fluid">
	<header>
		<div class="row">
			<div class="col-sm-11">
				  <p>Welcome <?php echo $user['name']; ?>!</p>
			</div>
			<div class="col-sm-1">
				<a href="<?php echo base_url(); ?>users/logout"><button type="button" class="btn btn-primary btn-xs">Logout</button></a>
			</div>
		</div>
    </header>
	<div class="row">
		<div class="col-sm-3">

			<!-- <ul class="list-group">
			  <li class="list-group-item">First item</li>
			  <li class="list-group-item">Second item</li>
			  <li class="list-group-item">Third item</li>
			</ul> -->
		   <!--  <h2>User Account</h2>
		    <div class="account-info">
		        <p><b>Name: </b><?php echo $user['name']; ?></p>
		        <p><b>Email: </b><?php echo $user['email']; ?></p>
		        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
		        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
		    </div> -->
         <div class="location-info">
          <?php 
            // print_r($location);
            foreach ($location as  $locationpoint) {
              if($locationpoint->gps_let!="" && $locationpoint->gps_log !=""){
                echo   "<p>".$locationpoint->gps_id." ".$locationpoint->gps_let." ".$locationpoint->gps_log." ".$locationpoint->gps_user." ".$locationpoint->gps_time."</p> ";
              }
            }
          ?>
        </div>
		</div>
		<div class="col-sm-9">

		   <div id="map" class="map"></div>

		</div>	

	</div>
</div>

    <script>

      // This example creates a simple polygon representing the Bermuda Triangle.
      // When the user clicks on the polygon an info window opens, showing
      // information about the polygon's coordinates.

      var map;
      var infoWindow;

      function initMap() {
           map = new google.maps.Map(document.getElementById('map'), {
           zoom: 20,
           center: {lat: 22.722344, lng: 75.8814843},
            mapTypeId: 'terrain'
        });

        // Define the LatLng coordinates for the polygon.
        var triangleCoords = [
            <?php 
             foreach ($location as  $locationpoint) {

              if($locationpoint->gps_let!="" && $locationpoint->gps_log !=""){
            ?>

            {lat: <?php echo $locationpoint->gps_let; ?> , lng: <?php echo $locationpoint->gps_log; ?> },

            <?php } }  ?>
        ];

        // Construct the polygon.
        var bermudaTriangle = new google.maps.Polygon({
          paths: triangleCoords,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 3,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        bermudaTriangle.setMap(map);

        // Add a listener for the click event.
        bermudaTriangle.addListener('click', showArrays);

        infoWindow = new google.maps.InfoWindow;
      }

      /** @this {google.maps.Polygon} */
      function showArrays(event) {
        // Since this polygon has only one path, we can call getPath() to return the
        // MVCArray of LatLngs.
        var vertices = this.getPath();
        var contentString = '<b>Bermuda Triangle polygon</b><br>' +
            'Clicked location: <br>' + event.latLng.lat() + ',' + event.latLng.lng() +
            '<br>';
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Iterate over the vertices.
        for (var i =0; i < vertices.getLength(); i++) {
          var xy = vertices.getAt(i);
          contentString += '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' +
              xy.lng();
          var marker = new google.maps.Marker({
            position: {lat: xy[1], lng: xy[2]},
            map: map,
            icon: image,
            shape: shape,
            title: xy[0],
            zIndex: xy[3]
          });
        }
        // Replace the info window's content and position.
        infoWindow.setContent(contentString);
        infoWindow.setPosition(event.latLng);
        infoWindow.open(map);
      }
    </script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFw2R2h7NfbCrb67OBbWn8Bf8dKak4ARg&callback=initMap&libraries=places,geometry"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/fontawesome-all.min.js"></script>
</body>
</html>