<!--VERSION2 this php file is for someone already logged in-->

<?php
require_once 'includes/global.inc.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="indexPageCSS.css">
<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<html>
<head>

<!--<h1 id="eventTitle">EVENT SHARE</h1>-->

    <title/>E.S.</title>
	<link rel="shortcut icon" href="eventIcon.ico" />
</head>
<body id="homePageBody">
	<!-- collapsible navbar -->
	<nav class="navbar navbar-inverse navbar-default navbar-static-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<!--<li class="active"><a href="#">Home</a></li>-->
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src ="images/navbarImage2.png" style="width:40px;height:25px;"><span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Account</a></li>
				<li><a href="#">Friends</a></li>
				<li><a href="#">Calendar</a></li>
			  </ul>
			</li>
		  </ul>
			  
		  <a class="navbar-brand" href="#">EVENT SHARE</a>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	
	<!-- end navbar -->

		  
	<!--
	<//?php if(isset($_SESSION['logged_in'])) : ?>
	<//?php $user = unserialize($_SESSION['user']); ?>
	Hello, <//?php echo strtoupper($user->username); ?>. You are logged in. <a href="logout.php"/>Logout</a> | <a href="settings.php"/>Change Email</a>
	<//?php else : ?>
	You are not logged in. <a href="login.php"/>Log In</a> | <a href="register.php"/>Register</a>
	<//?php endif; ?>
	-->
			
	
	<!-- information about webapp goes here-->
	<div class="container-fluid" id="centerInfo">
		<div  id="informationDIV"><!-- image-->
			<img src="webappIMAGE/forkIcon.png" alt="Cake">
			<!-- sentence --> 
			<h1 id="introduction">Let's Start</h1>
			<p id = "introductionStatement">Build. Create. Share. Manage your events. All in one simple place.</p>
			<!-- button here -->
			<button type="button" class="btn btn-default" id="bottonEvent">BUILD EVENT</button>
		</div>
	</div> <!-- end div>
</body>
</html>




