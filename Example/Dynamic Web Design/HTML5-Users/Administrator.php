<!DOCTYPE html>
<html lang="en">
<title>HTML5</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<link href="../CSS/index.css" rel="stylesheet">

<body>

<header> <a href="Index.html"><img src="../Images/Logo.png" alt="Destribution Logo" width="73" height="70" ></a>
  <h1>Noise Distribution</h1>

</header>

<canvas id="subheader-Canvas" width="300" height="40">
	Your browser does not support the HTML5 canvas tag.
</canvas>

<script>
var c = document.getElementById("subheader-Canvas");
var ctx = c.getContext("2d");
ctx.font = "30px Times, serif";
ctx.strokeText("Welcome Here !",10,30);
</script>

<nav>
<ul>
  <li><a href = "Index.html">Home</a></li>
  <li><a href = "map.html">Map</a></li>
  <li><a href = "contact.html">Contact Us</a></li>
</ul>
</nav>

<section>
	<h2>News Section</h2>

	<script> 
    	function checkInput(textbox) {
		 var textInput = document.getElementById(textbox).value;	
		 alert(textInput); 
		}
    </script>
    
	<form action="" method="get">
         Integer 1: <input type="text" id="num1" name="num1" onchange="checkInput('num1');" /> <br />
         Integer 2: <input type="text" id="num2" name="num2" onchange="checkInput('num2');" /> <br />
         <input type="submit" value="Compute" />
    </form>
    <article>
        <h2>News Article</h2>
        
        <p>Please update your LTU account.</p>
        
        <form>
        <p>NetID :</p>
        <input type="text" name="net-id">
    
        <p>Password :</p>
        <input type="text" name="password">   
            
        <br/><br/>
        <input type="submit" value="Register"> 
    	</form>
        
        <br/>
        
        <form>
        <canvas id="myCanvas" width="200" height="100">
			Your browser does not support the HTML5 canvas tag.
        </canvas>
        
        <script>
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			
			// Create gradient
			var grd = ctx.createLinearGradient(0,0,200,0);
			grd.addColorStop(0,"red");
			grd.addColorStop(1,"white");
			
			// Fill with gradient
			ctx.fillStyle = grd;
			ctx.fillRect(10,10,150,80);
		</script>
        </form>
        
    </article>

    <article>
        <h2>News Article</h2>
        
        <section id="map" style="width:400px;height:300px;"></section>
        
        <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>      
     var map;
  var infowindow;

  function initialize() {

    if (navigator.geolocation)
   {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
    function showPosition(position)
    {

    var latlon = new google.maps.LatLng( position.coords.latitude, position.coords.longitude );

    map = new google.maps.Map(document.getElementById('map'), {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: latlon,
      zoom: 15,
      disableDefaultUI: true
    });

    var request = {
      location: latlon,
      radius: 555,
      types: ['bar']
    };
    infowindow = new google.maps.InfoWindow();
    var service = new google.maps.places.PlacesService(map);
    service.search(request, callback);
  }

  function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
     }
    }
   }
  }

  function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
      alert(place.name);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
     
     </script>   
        <p>Ipsum lurum hurum turum ipsum lurum hurum turum
        ipsum lurum hurum turum ipsum lurum hurum turum.</p>
        <p>Ipsum lurum hurum turum ipsum lurum hurum turum
        ipsum lurum hurum turum ipsum lurum hurum turum.</p>
        <p>Ipsum lurum hurum turum ipsum lurum hurum turum
        ipsum lurum hurum turum ipsum lurum hurum turum.</p>
    </article>
</section>

<footer>
<p>&copy; 2014 LTU Home. All rights reserved.</p>
</footer>

</body>
</html>
