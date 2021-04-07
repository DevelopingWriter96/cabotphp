<!doctype html>
<html lang="en">
<head>

<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
<meta charset="utf-8">
<title><?php echo($ptitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://kit.fontawesome.com/f867344e03.js" crossorigin="anonymous"></script>
<link href="css/styles.css" rel="stylesheet">    
</head>
<body>
<div id="headerwrapper">
<header class="clearfix">
<figure class="logo">
	<img src="images/logo0.png"  alt="logo" srcset="images/logo-assets/logo1.png 1x, images/logo-assets/logo2.png 2x, images/logo-assets/logo3.png 3x">
</figure>		
<h2><a class="telephone" href="tel:1-800-123-4567">1-800-123-4567</a></h2>		
</header>
</div>
<div id="navwrapper">    
<nav class="clearfix">
	<button onClick="toggleMenu()">&#9776;</button>	
        <ul id="primaryNav" class="hide">
			<li><a href="index.php">HOME</a></li>
			<li><a href="cruise.php">CRUISE</a></li>
			<li><a href ="#">AGENTS</a>
			<ul>
	<li><a href="agent1.php">AGENT 1</a></li>
	<li><a href="agent2.php">AGENT 2</a></li>
	</ul>
	</li>
			<li><a href="booking.php">BOOK</a></li>
			<div class="keepOpen"></div>
		</ul>
		<form>
		<input type="search">
		<i class="fa fa-search"><button type="submit"></button></i>
		</form>
    </nav>
	</div>