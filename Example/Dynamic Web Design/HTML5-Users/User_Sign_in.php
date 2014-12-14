<!DOCTYPE html>
<html lang="en">
<title>HTML5</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<!-- Using PHP Session for login navigation !! -->
<?php
include('../Scripts/login_session.php');
include('../Scripts/noise_input.php'); // Includes user input Script
?>


<?php 
/*
$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";
$dbname = "noisedatalist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo "<br/>";
echo "Connected successfully " , $servername , "<br/>";

$sql_1 = "SELECT * FROM usersdata";
$result_1 = $conn->query($sql_1);

if ($result_1->num_rows > 0) {
    // output data of each row
    while($row = $result_1->fetch_assoc()) {
        echo 
		"<br> - username: " . $row["UserName"]. 
		"<br> - password: " . $row["Password"]. 
		"<br> - customername: " . $row["CustomerName"]. 
		"<br> - email: " . $row["Email"]. 
		"<br> - birthday: " . $row["Birthday"]. 
		"<br> - mobilephone: " . $row["MobilePhone"].
		" <br> ";
    }
} else {
    echo "0 results";
}

echo "\t";
echo " ---------- ---------- ";  

$sql_2 = "SELECT * FROM noisedata";
$result_2 = $conn->query($sql_2);

if ($result_2->num_rows > 0) {
    // output data of each row
    while($row = $result_2->fetch_assoc()) {
        echo 
		"<br> - dataid: " . $row["DataID"]. 
		"<br> - noiselevel: " . $row["NoiseLevel"]. 
		"<br> - lat: " . $row["LocationLat"]. 
		"<br> - lon: " . $row["LocationLon"]. 
		"<br> - userid: " . $row["UserID"]. 
		" <br> ";
    }
} else {
    echo "0 results";
}

$conn->close();
*/
?> 

<link href="../CSS/index.css" rel="stylesheet">
<link href="../CSS/media-icons.css" rel="stylesheet">

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

<ul>
  <li id = "loginName">Welcome,   
  <!-- Using PHP Session to transfer the respective username from login page !! -->
  <i style="color:#F6F;"><?php echo $login_session; ?></i> !!
  </li> 
</ul>

<!-- Using PHP Session to log out and back homepage !! -->
<b id= "logout"><a href="../Scripts/login_logout.php">Log Out</a></b>

</nav>

<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";
$dbname = "noisedatalist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql_account = "SELECT * FROM usersdata where username='$login_session'";
$result_account = $conn->query($sql_account);
$row_account = $result_account->fetch_assoc();

$conn->close();
?>

<section>

	<h2>General Account</h2>
	
    <article style="height:200px;">
        <h2>My Profile</h2>
        
        <form>
        <img src="../Images/blank.png" alt="profile" style="float:left" height="120" width="120">    
        
        <p id="account-Info"> <b>CustomerName:</b> <?php echo $row_account["CustomerName"] ?> </p>   
        <p id="account-Info"> <b>Email:</b> <?php echo $row_account["Email"] ?> </p>    
        <p id="account-Info"> <b>Tel:</b> <?php echo $row_account["MobilePhone"] ?> </p>     
        </form>
        
        <!-- 
        <p style="margin-top: 90px;">Please update your LTU account.</p>
              
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
        -->       
    </article>

    <article style="height:1200px;">
        <h2>Current Location</h2>     
        
        <br/>
        <section id="mapholder" style="width:600px;height:450px;float:left;"></section>
    
		<script src="http://maps.googleapis.com/maps/api/js"></script>

        <article style="float:left;margin-top:120px;margin-left:60px;background-color:#CCC"> 
        	<form action="" method="post">      	
       
            <p id="warninfo"></p>
            <!-- Latitude: <label id="latlabel"></label> -->
            <input type="hidden" id="latlocal" name="local-lat"></input>
            <br/>
            <!-- Longitude: <label id="lonlabel"></label> -->
            <input type="hidden" id="lonlocal" name="local-lon"></input>
 			<br/>
            <center>Noise Level : <input style="width:40px;" type="text" name="noiselevelinput"> dB </center>
            <br/>
            <center>Date : <label id="dateToday"></label> </center>
                <!-- Get year-month-day
                <input id="today-year" type="hidden" name="today-year"></input>
                <input id="today-month" type="hidden" name="today-month"></input>
                <input id="today-day" type="hidden" name="today-day"></input>
                -->
            <br/><br/>
            <input type="button" style="margin-top:20px;margin-bottom:20px;" 
            			value="Show my location on Map" onclick="getLocation()" />  
            <input type="submit" name="noiseinputsubmit" value="Comfirm">
            
            <p style="color:#F00;"><?php echo $error_2?></p>
            <p style="color:#F00;"><?php echo $error_1?></p>
            <p style="color:#F0F"><?php echo $reply?></p>
            
            </form>  
        </article>
       
        <!--This is a JS for Current location annotation of Google Map-->
		<script>
        var x = document.getElementById("latlocal");
		var y = document.getElementById("lonlocal");
		var xy = document.getElementById("warninfo");
		var map = null;
		
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.watchPosition(showPosition);
                } else { 
                    xy.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
            
            function showPosition(position) {
				
				var lat = position.coords.latitude;
				var lon = position.coords.longitude;
				
				// Show current location in text
				x.value = lat; 
				y.value = lon;
				//document.getElementById("latlabel").innerHTML = lat;
				//document.getElementById("lonlabel").innerHTML = lon;
				
				//document.getElementById('latitude').innerHTML = lat;
         		//document.getElementById('longitude').innerHTML = lon;
				
				var latLong = new google.maps.LatLng(lat, lon);
				
					var marker = new google.maps.Marker({
						position:latLong
					});		
					marker.setMap(map);	
				map.setZoom(13);
				map.setCenter(marker.getPosition());	
            }
			
			
			//google.maps.event.addDomListener(window, 'load', initMap);
			
			function initMap() {
				
				var mapOptions = {
				  center: new google.maps.LatLng(0, 0),
				  zoom: 1,
				  mapTypeId: google.maps.MapTypeId.ROADMAP
				};

				map = new google.maps.Map(document.getElementById("mapholder"), mapOptions);
			}
			
			function loadScript()
			{
				  var script = document.createElement("script");
				  script.type = "text/javascript";
				  script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initMap";
				  document.body.appendChild(script);
			}
			
			window.onload = loadScript;
			
			function showError(error) {
				switch(error.code) {
					case error.PERMISSION_DENIED:
						xy.innerHTML = "User denied the request for Geolocation."
						break;
					case error.POSITION_UNAVAILABLE:
						xy.innerHTML = "Location information is unavailable."
						break;
					case error.TIMEOUT:
						xy.innerHTML = "The request to get user location timed out."
						break;
					case error.UNKNOWN_ERROR:
						xy.innerHTML = "An unknown error occurred."
						break;
				}
			}
        </script>
        
        <script>
			var d = new Date();
			document.getElementById("dateToday").innerHTML = d.toLocaleDateString();
			// Get year-month-day
			//document.getElementById("today-year").value=d.getFullYear()
			//document.getElementById("today-month").value=d.getMonth();
			//document.getElementById("today-day").value=d.getDate();
		</script>
    
      <article style="clear:both;height:600px;">
        
        <h2>Noise Diversification</h2>  
        <br/>  
        <form>
        <h4>Noise Scale:</h4>
        <canvas id="barGradient" style=" width:400px;height:100px;">
			Your browser does not support the HTML5 canvas tag.
        </canvas>
        
        <script>
			var c = document.getElementById("barGradient");
			var ctx = c.getContext("2d");
			
			// Create gradient
			var grd = ctx.createLinearGradient(0,0,200,20);
			grd.addColorStop(0,"red");
			grd.addColorStop(0.5,"green");
			grd.addColorStop(1,"blue");
			
			// Fill with gradient
			ctx.fillStyle = grd;
			ctx.fillRect(10,10,200,60);
			
			// Text
			ctx.font = "italic 24px Arial";
  			ctx.fillText("S", 10, 100);
			ctx.fillText("M", 100, 100);
			ctx.fillText("L", 200, 100);
		</script>
        
        </form>
        <p id="info-image"></p>

        <button onclick='getBackImage();
        startAnimation("canvas_1","../Images/Noise Diversification/p-1.png",
        "../Images/Noise Diversification/p-2.png","../Images/Noise Diversification/p-3.png");
        startAnimation("canvas_2","../Images/Noise Diversification/p-4.png",
        "../Images/Noise Diversification/p-5.png","../Images/Noise Diversification/p-6.png");
        startAnimation("canvas_3","../Images/Noise Diversification/p-7.png",
        "../Images/Noise Diversification/p-8.png","../Images/Noise Diversification/p-9.png");
        startAnimation("canvas_4","../Images/Noise Diversification/p-11.png",
        "../Images/Noise Diversification/p-12.png","../Images/Noise Diversification/p-13.png");
        startAnimation("canvas_5","../Images/Noise Diversification/p-14.png",
        "../Images/Noise Diversification/p-15.png","../Images/Noise Diversification/p-16.png");
        startAnimation("canvas_6","../Images/Noise Diversification/p-17.png",
        "../Images/Noise Diversification/p-18.png","../Images/Noise Diversification/p-19.png");'>
        		Virtual Distribution 
        </button>
   
        <section id="image_change" style="width:400px;height:300px;float:left;border:hidden;">
        
        <canvas id="canvas_1" style="width:100px;height:75px;float:left;"></canvas>
        <canvas id="canvas_2" style="width:60px;height:45px;float:inherit;margin-left:200px;"></canvas>
        <canvas id="canvas_3" style="width:160px;height:120px;float:inherit;margin-left:20px;"></canvas>
        <canvas id="canvas_4" style="width:40px;height:30px;float:inherit;margin-top:40px;margin-left:60px;"></canvas>
        <canvas id="canvas_5" style="width:80px;height:60px;float:inherit;margin-top:40px;margin-left:50px;"></canvas>
        <canvas id="canvas_6" style="width:120px;height:90px;float:inherit;margin-left:150px;"></canvas>
  
        </section>
        
        <section id="image_background" style="width:400px;height:300px;float:left;display:none;"></section>
        
		<script>
			function startAnimation(filename, image_1, image_2, image_3) {
				var canvas = document.getElementById(filename);
				var ctx = canvas.getContext("2d");
				//ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
				
				window.requestAnimFrame = (function (callback) {
					return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (callback) {
						window.setTimeout(callback, 1000 / 60);
					};
				})();
				
				
				var imageIndex = 0;
				var animPctComplete = 0;
				var fps = 60;
				
				// image loader
				
				var imageURLs = [];
				var imagesOK = 0;
				var imgs = [];
				imageURLs.push(image_1);
				imageURLs.push(image_2);
				imageURLs.push(image_3);
				//imageURLs.push("https://dl.dropboxusercontent.com/u/139992952/stackoverflow/house204-3.jpg");
				loadAllImages();
			
			function loadAllImages(callback) {
				for (var i = 0; i < imageURLs.length; i++) {
					var img = new Image();
					imgs.push(img);
					img.onload = function () {
						imagesOK++;
						if (imagesOK == imageURLs.length) {
							animate();
						}
					};
					img.src = imageURLs[i];
				}
			}
			
			function animate() {
				setTimeout(function () {
					// request new frame
					requestAnimFrame(animate);
					
			
					// get the current image
					// get the xy where the image will be drawn
					var img = imgs[imageIndex];
					var imgX = (canvas.width / 2 - img.width / 2) * animPctComplete;
					var imgY = (canvas.height / 2) - img.height / 2;
			
					// set the current opacity
					ctx.globalAlpha = animPctComplete;
			
					// draw the image
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					ctx.drawImage(img, imgX, imgY);
			
					// increment the animationPctComplete for next frame
					animPctComplete += .01; //100/fps;
			
					// if the current animation is complete
					// reset the animation with the next image
					if (animPctComplete >= 1.00) {
						animPctComplete = 0.00;
						imageIndex++;
						if (imageIndex >= imgs.length) {
							imageIndex = 0;
						}
					}
			
				}, 1000 / fps);
			}
		}
		</script>    
        
        <script>
            var image_info = document.getElementById("info-image");
            function getBackImage() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showImage, showError);
                } else {
                    image_info.innerHTML = "Geolocation is not supported by this browser.";
                }
            }
            
            function showImage(position) {
                var latlon = position.coords.latitude + "," + position.coords.longitude;
            
                var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
                +latlon+"&zoom=13&size=400x300&sensor=false";
                document.getElementById("image_background").innerHTML = "<img src='"+img_url+"'>";
				document.getElementById("image_change").style.background = "url('"+img_url+"') no-repeat center";
            }
            
            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        image_info.innerHTML = "User denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        image_info.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        image_info.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        image_info.innerHTML = "An unknown error occurred."
                        break;
                }
            }
        </script>    
      </article>      
    </article>
</section>

<footer>
<p>&copy; 2014 LTU Home. All rights reserved.</p>
</footer>

</body>
</html>
