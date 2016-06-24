<!DOCTYPE html>
<?php $pageID="rock paper scissors" ?>
<html>
<head>
	<title>rock paper scissors</title>
	<link rel="stylesheet" type="text/css" href="personal-website.css">
</head>
<body>
	<div class="flex-container">
		<div class="sidebar">
			<div class="header">
				<a href="index.php">blair englund</a>
				<?php include 'php/social.php' ?>
			</div>

			<div class="navbar">
				<?php include 'php/navbar.php' ?>
			</div>
		</div>

		<div class="content">
			<?php include 'rps/rpsgame.php' ?>
		</div>
	</div>

</body>
</html>