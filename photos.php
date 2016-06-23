<!DOCTYPE html>
<?php $pageID="photos" ?>
<html>
<head>
	<title>photos</title>
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
			<h3>This is a random .gif</h3>
			<?php include 'php/slideshow/randomslideshow.php' ?>
		</div>
	</div>

</body>
</html>