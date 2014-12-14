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
// (Unsuccessful) Include Register Script
include('../Scripts/register_new.php'); 
include('../Scripts/login.php'); // Includes Login Script
?>

<?php
/*$servername = "127.0.0.1:3306";
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

$sql = "SELECT username FROM usersdata";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();*/
?> 

<link href="../CSS/index.css" rel="stylesheet">
<link href="../CSS/media-icons.css" rel="stylesheet">
<link href="../CSS/register-form.css" rel="stylesheet">
<link href="../CSS/windows-model.css" rel="stylesheet">
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
	<h2>Home Page</h2>
    
    <article>
        <h2>Please sign in or register your account.</h2>
        
        <form style="border:1px solid #c3c3c3;" action="" method="post">
            <h3>Not a current user?</h3>
                
            <p> Come to  <a href="#openModal" style="font-size:18px; font-style:italic; margin-left:5px;" >Register</a> here !! </p>
           
            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                   
                    <section class="form-layout">

                        <form id="contactform"> 
                            <p class="contact"><label for="name">Name</label></p> 
                            <input id="name" name="name" placeholder="First and last name" required tabindex="1" type="text"> 
                             
                            <p class="contact"><label for="email">Email</label></p> 
                            <input id="email" name="email" placeholder="example@domain.com" required type="email"> 
                            
                            <p class="contact"><label for="username">Create a username</label></p> 
                            <input id="username" name="username" placeholder="username" required tabindex="2" type="text"> 
                             
                            <p class="contact"><label for="password">Create a password</label></p> 
                            <input type="password" id="password" name="password" required> 
                            <p class="contact"><label for="repassword">Confirm your password</label></p> 
                            <input type="password" id="repassword" name="repassword" required> 
                    
                           <fieldset>
                             <label>Birthday</label>
                              <label class="month"> 
                              <select class="select-style" name="BirthMonth">
                              <option value="">Month</option>
                              <option  value="01">January</option>
                              <option value="02">February</option>
                              <option value="03" >March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12" >December</option>
                              </label>
                             </select>    
                            <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required></label>
                            <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required></label>
                          </fieldset>
              
                        <select class="select-style gender" name="gender">
                        <option value="select">i am..</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="others">Other</option>
                        </select><br><br>
                        
                        <p class="contact"><label for="phone">Mobile phone</label></p> 
                        <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>
                        
                        <input class="buttom" name="register_new" id="submit" tabindex="5" value="Sign me up!" type="submit">                 
               </form> 
    </section>   
                </div>
            </div>
   		</form>
           
        <label name = "mes"><b><p style="color: green;"><?php echo $reg_error; ?></p></b></label>
        <br/>
        
        <form style="border:1px solid #c3c3c3;" action="" method="post">
            <h3>User Login</h3>
         
            <p>NetID :</p>
            <input type="text" name="net-id">
        
            <p>Password :</p>
            <input type="password" name="password">   
            
            <br/>        
    		<input type="submit" name="submit" value="Sign In">
			
            <br/><br/>
            <b><p style="color: red;"><?php echo $error; ?></p></b>
		</form>
        
            <br/>       
        <br/>  
    </article>

    <article>
        <h2>Abstract</h2>
        <p>Welcome to noise observation website!</p>
        <p>You will figure out any interesting source of virtual noise distribution for your neighbourhood.</p>
        
    </article>
  
</section>

<footer>
<p>&copy; 2014 LTU Home. All rights reserved.</p>
</footer>

</body>
</html>
