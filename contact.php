<!DOCTYPE html>
<html lang="en">
<head>

<!--tab-icon-->
<link rel="shortcut icon" type="image/x-icon" href="images/nplogo-blackbkgrnd.png"/>
<!--tab-icon-->
	

<!--TAB TITLE-->
<title>CONTACT ME | Nathan Parchment</title>
<link rel="icon" type="">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!--FONT-->
<link href="https://fonts.googleapis.com/css2?family=Geo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">	
<!--FONT-->

<!--lINK TO STYLESHEET-->
<link rel="stylesheet" type="text/css" href="assets/css/glvd.css">   
<!--lINK TO STYLESHEET-->
</head>
<body>

	
<!--NAVBAR-->
<nav class="w3-sidebar w3-black w3-animate-top " id="mySidebar">
<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding  w3-display-topright" style="padding:6px 24px">
<i class="fa fa-remove"></i>
</a>
<div class="w3-bar-block w3-center" id="landing-nav-links">
<a href="index" class="glitch2">HOME</a>
<a href="aboutme" class="w3-bar-item glitch3">ABOUT</a>
<a href="projects" class="w3-bar-item glitch4">PROJECTS</a>
<a href="graphics" class="w3-bar-item glitch5">GRAPHICS</a>
<a href="contact.php" class="w3-bar-item glitch6">CONTACT</a>
</div>
</nav>

<div class="container" id="burger">
<span class="w3-button w3-xxlarge w3-display-topright" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
</div>
<!--NAVBAR-->
	
	
<!--CONTACT HEADING-->
<div class="container" id="contact-titleheading">
<div class="row">
<h3 class="glitch9">CONTACT</h3>
</div>
</div>	
	
	
<!--CONTACT CONTENT-->
<div id="contactquote-title"><p>Fill out the form below to discuss any work or projects.<br>Alternatively, you can email me via nathan.parchment47@gmail.com</p></div>	
    
	
<!--CONTACT FORM-->
<main>
<form class="contact-form" action=contactform.php method="post">
<input type="text" name="name" placeholder="Your Name">
<input type="text" name="mail" placeholder="Email Address">
<input type="text" name="subject" placeholder="Subject">
<textarea name="message" placeholder="Message"></textarea>
<button type="submit" name="submit">SEND</button>
</form>
</main>	


	
	
<!--SCRIPTS-->  
<script src="assets/js/nav-open-close.js"></script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--SCRIPTS-->  

</body>
</html>