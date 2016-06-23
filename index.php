<!DOCTYPE html>
<?php $pageID="home" ?>
<html>
<head>
	<title>blair englund</title>
	<?php if ($_GET["theme"] == "cake time") { ?>
	<link rel="stylesheet" type="text/css" href="party.css">
	<?php } 
	else { ?>
	<link rel="stylesheet" type="text/css" href="personal-website.css">
	<?php } ?>

</head>

<body>
	<div class="flex-container">
		<div class="sidebar">
			<div class="header">
				<a href="index.php">blair englund</a>
				<?php include 'php/social.php' ?>
			</div>

			<div class="navbar">
				<form>
					<select name="theme">
						<option value="classic">classic</option>
						<option value="cake time">cake time</option>
					</select>
					<input type="submit" name="Submit">
				</form>
				<?php include 'php/navbar.php' ?>
			</div>
		</div>

		<div class="content">
			<p>hi i'm blair and i make things on the internet and on paper</p>

			<?php echo $_GET["theme"];?>

		</div>
	</div>

</body>
</html>