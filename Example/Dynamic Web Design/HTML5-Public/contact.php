<!DOCTYPE html>
<html lang="en">
<title>HTML5</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

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
</nav>

<section>
	<h2>Contact US</h2>

    <article>
            <h2>Official Contact</h2>
            <br/>
            <form style="font-style:italic; color:#00F">
            <p> <b>Office Address</b>:  Luleå University of Technology • 971 87 Luleå</p>
            
            <p> <b>Tel</b>:  +46 (0)920 49 10 00  </p>
            <p> <b>Fax</b>:  +46 (0)920 49 13 99  </p>
            <p> <b>Email</b>:  123@abc.com </p>
            <form>
            
    </article>
</section>

<footer>
<p>&copy; 2014 LTU Home. All rights reserved.</p>
</footer>

</body>
</html>
