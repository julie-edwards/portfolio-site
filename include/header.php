<!DOCTYPE html>
<?php define('THIS_PAGE',basename($_SERVER['PHP_SELF'])); ?>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta name="robots" content="noindex, nofollow">
<meta charset="utf-8">

<title>Julie Edwards - Web Developer</title>
	
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/togglator.css">
<link rel="stylesheet" href="css/rainbow-theme.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/rainbow-custom.min.js"></script>
<script src="js/togglator.js"></script>
<script src="js/subset.js"></script>
	
</head>
<body>
<script>
	//TODO GOOGLE ANALYTICS
</script>
<header class="page-width">
	<h1><a href="index.php"><strong>Julie</strong>Edwards</a></h1>
	<ul class="social-sprites">
		<li><a href="http://www.linkedin.com/pub/julie-edwards/55/4a7/43a" target="_blank"></a></li>
		<li><a href="https://github.com/julie-edwards" target="_blank"></a></li>
	</ul>
	<nav>
		<ul>
			<li <?php if (THIS_PAGE == 'resume.php') { echo "class=\"active\"";} ?>><a href="resume.php">Resume</a></li>
			<li <?php if (THIS_PAGE == 'websites.php') { echo "class=\"active\"";} ?>><a href="websites.php">Websites</a></li>
			<li <?php if (THIS_PAGE == 'scripts.php') { echo "class=\"active\"";} ?>><a href="scripts.php">Scripts</a></li>
			<li <?php if (THIS_PAGE == 'contact.php') { echo "class=\"active\"";} ?>><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</header>
	
</div>
<!-- End header include -->