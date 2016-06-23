<!DOCTYPE html>
<?php $pageID="articles" ?>
<html>
<head>
	<title>articles</title>
	<link rel="stylesheet" type="text/css" href="personal-website.css">
</head>
<body>
	<div class="flex-container">
		<div class="header">
			<a href="index.php">blair englund</a><br>
			<?php include 'php/social.php' ?>
		</div>

		<div class="navbar">
			<?php include 'php/navbar.php' ?>
		</div>

		<div class="content">
			<?php include 'listarticles.php' ?>
		</div>
	</div>
</body>
</html>