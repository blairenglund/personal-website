<!DOCTYPE html>
<?php $pageID="home" ?>
<html>
<head>
	<title>blair englund</title>
	<?php include 'php/themeswitcher.php'; ?>

</head>

<body>
	<div class="flex-container">
		<?php include 'php/sidebar.php' ?>

		<div class="content">
			<p>hi i'm blair and i make things on the internet and on paper</p>

			<?php echo $_GET["theme"];?>

		</div>
	</div>

</body>
</html>