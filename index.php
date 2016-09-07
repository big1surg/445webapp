<?php
//index.php 
//echo '<link href="headings.css" rel="stylesheet">';
echo '<link href="indexPage.css" rel="stylesheet">';
require_once 'includes/global.inc.php';
?>
 
<html/>
<head/>
<style>
.mySlides {display:none;}
</style>

<div>
<style>
h2{background-color:black; color: white; border: 1px solid; padding:0; margin:0}
h1{background-color:black; color: white; padding:0; margin:0} 
#eventTitle{font-size: 100px;}
p{display: incline-block;}
</style>
<div>
<h1 id="eventTitle">EVENT</h1>

<div class="mySlides">
  <h1>Creator.</h1>
</div>

<div class="mySlides">
  <h1>Maker.</h1>
</div>

<div class="mySlides">
  <h1>Planner.</h1>
</div>

<div class="mySlides">
  <h1>Sharer.</h1>
</div>

</div>
</div>
<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1;
    }
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
    
}
</script>
    <title/>E.S.</title>
	<!--<div id="heading" >
		<h1/>Event Organizer</h1>
		<h2/>Create. Share. Add. Invite. Buy. Let's Party</h2>
	</div>-->
</head>
<body/>
	<!--navigational bar-->
	<div id="events">
		<ul id="navbar">
			<li id="navbaritem"><a href="index.php">Home</a></li>
			<li id="navbaritem"><a>Add Event</a></li>
			<li id="navbaritem"><a>Delete Event</a></li>
		</ul>
		<!--list of events-->
		<div>
			<h2 id="eventLabel"/>Your Events:</h2>
			<ul id="eventList">
				<li>Omid's Graduation</li>
				<li>Dennis' Potluck</li>
				<li>Sergio's Birthday</li>
				<li>Game Night</li>
				<li><a href="bbqExample.php">BBQ</a></li>
			</ul>
		</div>
	</div>
	<!--registration, requires global.inc.php-->
	<div id="registration">
		<?php if(isset($_SESSION['logged_in'])) : ?>
		<?php $user = unserialize($_SESSION['user']); ?>
			Hello, <?php echo strtoupper($user->username); ?>. You are logged in. <a href="logout.php"/>Logout</a> | <a href="settings.php"/>Change Email</a>
		<?php else : ?>
			You are not logged in. <a href="login.php"/>Log In</a> | <a href="register.php"/>Register</a>
		<?php endif; ?>
	</div>
</body>
</html>




