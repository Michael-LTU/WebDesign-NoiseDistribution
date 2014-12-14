<!DOCTYPE html>
<html lang="en">
<title>HTML5</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<!-- Using PHP Session for data analysis !! -->
<?php
include('../Scripts/main_map_data_collect.php');
?>

<link href="../CSS/index.css" rel="stylesheet">
<link href="../CSS/media-icons.css" rel="stylesheet">

<!--This is a JS for graphic figure-->
<script src="../Scripts/jquery-1.6.min.js"></script>
<script src="../Scripts/canvasChart.js"></script>

<!--Noise Distribution Map was divided into each rectangle area by
2-D coordinate of latitude and longitude with precision 0.01
For Example,
(65.61, 22.14);(65.61, 22.15);
(65.62, 22.14);
(65.61, 22.14); etc.
-->

<!--This is a JS for Google Map from web site-->
<script src="http://maps.googleapis.com/maps/api/js">
</script>
	  	
<script>
	//Specify a center point on map
	var myCenter=new google.maps.LatLng(65.617974,22.140185);
	var map;
	var marker, myCity;
	var triggle = 0;
	
	// Google Map function
	function initialize()
	{
	var mapProp = {
	  center:myCenter,
	  zoom:13,
	  mapTypeId:google.maps.MapTypeId.HYBRID
	  };
	  
	map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	//Triggers for pin placeMarkers
	google.maps.event.addListener(map, 'click', 
		function(event) {placeMarker(event.latLng);
		
		//alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
		var lat = event.latLng.lat();
		var lon = event.latLng.lng();	
		//alert(lat + ", " + lon);
		
		document.getElementById('lat-analysis').value = lat;
		document.getElementById('lon-analysis').value = lon;

		});
		
	
	//Add a marker
	marker = new google.maps.Marker({
	  position:myCenter,
	  animation:google.maps.Animation.BOUNCE
	  });
	marker.setMap(map);
	
	//Add a circle area
	myCity = new google.maps.Circle({
	  center:myCenter,
	  radius:200,
	  strokeColor:"#0000FF",
	  strokeOpacity:0.8,
	  strokeWeight:2,
	  fillColor:"#0000FF",
	  fillOpacity:0.4
	  });
	myCity.setMap(map)
	
	//Add a window pop-up
	var str = "The Noise Level is : ";
	var noise_num = 80;
	var num_unit = " dB"
	var str_Content = str + noise_num + num_unit;
	
	var infowindow = new google.maps.InfoWindow({
		content:str_Content
	  });
	infowindow.open(map,marker);
	
	}
	// The end of Google Map function

	google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
	// PlaceMarker function
  	function placeMarker(location) {
		var marker_1 = new google.maps.Marker({
			position: location,
			map: map,
		  });
		var infowindow_1 = new google.maps.InfoWindow();
			
		var myCity_1 = new google.maps.Circle({
		  center:location,
		  radius:200,
		  strokeColor:"#0000FF",
		  strokeOpacity:0.8,
		  strokeWeight:2,
		  fillColor:"#0000FF",
		  fillOpacity:0.4
		  });
		  
		 
		infowindow_1.setContent("The Noise Level is : <?php echo $average; ?> dB ");
		infowindow_1.open(map,marker_1);
		myCity_1.setMap(map);

		//Info and marker are disappeared after 2 seconds 
		setTimeout(function(){
			infowindow_1.close();
			marker_1.setMap(null);
			myCity_1.setMap(null);
			}, 2000);
		}
  	// The end of PlaceMarker function
</script>

<!--This is a JS for Graph Figure-->
<script>
	$(document).ready(function () {
            var dataDef = { title: "Noise-level Diversification",
                            xLabel: 'Date (December 2014)', 
                            yLabel: 'Loudness (dB)',
                            labelFont: '15pt Arial', 
                            dataPointFont: '5pt Arial',
                            renderTypes: [CanvasChart.renderType.lines, CanvasChart.renderType.points],
                            dataPoints: [							
										 { x: <?php echo $date[0]?>, y: <?php echo $noise[0]?> },							
										 { x: <?php echo $date[1]?>, y: <?php echo $noise[1]?> },										
										 { x: <?php echo $date[2]?>, y: <?php echo $noise[2]?> },	   
										 { x: <?php echo $date[3]?>, y: <?php echo $noise[3]?> },
										 { x: <?php echo $date[4]?>, y: <?php echo $noise[4]?> },
										 { x: <?php echo $date[5]?>, y: <?php echo $noise[5]?> },
										 { x: <?php echo $date[6]?>, y: <?php echo $noise[6]?> },
										 { x: <?php echo $date[7]?>, y: <?php echo $noise[7]?> },
										 { x: <?php echo $date[8]?>, y: <?php echo $noise[8]?> },
										 { x: <?php echo $date[9]?>, y: <?php echo $noise[9]?> },	
                                        ]
                           };		
            	CanvasChart.render('canvas', dataDef);
        });
</script>

<body>
<header> <a href="../HTML5-Public/Index.php"><img src="../Images/Logo.png" alt="Destribution Logo" width="73" height="70" ></a>
  <h1>Noise Distribution</h1>
</header>

<canvas id="subheader-Canvas" width="600" height="40">
	Your browser does not support the HTML5 canvas tag.
</canvas>

<script>
var c = document.getElementById("subheader-Canvas");
var ctx = c.getContext("2d");
ctx.font = "30px Times, serif";
ctx.strokeText("Welcome Here !",10,30);
</script>

<aside class="socialMedia_wrapper">
  <a class="icon facebook" href="#"><span class="zocial-facebook"></span></a>
  <a class="icon twitter" href="#"><span class="zocial-twitter"></span></a>
  <a class="icon linkedin" href="#"><span class="zocial-linkedin"></span></a>
  <a class="icon youtube" href="#"><span class="zocial-youtube"></span></a>
  <a class="icon flickr" href="#"><span class="zocial-flickr"></span></a>
  <a class="icon email" href="#"><span class="zocial-email"></span></a>
</aside>

<nav>
<ul>
  <li><a href = "../HTML5-Public/Index.php">Home</a></li>
  <li><a href = "../HTML5-Public/map.php">Map</a></li>
  <li><a href = "../HTML5-Public/contact.php">Contact Us</a></li>
</ul>
</nav>

<section>
	<h2>Noise Data</h2>

    <article>
        <h2>Map Location</h2>
            
        <br/>       
        <section style="float:right;margin-top:300px;">
            <form method="POST" action="" > 
                <p>Your current location in coordinate :</p>
                <input id="lat-analysis" name="lat-analysis" style="width:150px;" type="text">
                <input id="lon-analysis" name="lon-analysis" style="width:150px;" type="text"> 
                <br/>
                <input type="submit" name="start-analysis" value="Analyse noise"> 
                <b><p style="color: red;"><?php echo $errorMessage; ?></p></b>
            </form>
        </section>
        
        <section id="googleMap" style="float:left;width:800px;height:580px;"></section>
        
        <p style="font-size:24px;clear:both">The average noise level of current location is: 
            <b id = "abc" style="font-size:28px;">
				<script>
                 $(document).ready(function () {
                    var num = <?php echo $average; ?>;
                    var n = num.toFixed(2)
                    document.getElementById("abc").innerHTML = n;
                    });
                </script>
            </b>
            dB
        </p>
          
        <canvas id="canvas" style="margin-left:50px;margin-top:50px;" width="800" height="600"></canvas>       
    </article>
    
</section>

<footer>
<p>&copy; 2014 LTU Home. All rights reserved.</p>
</footer>

</body>
</html>
