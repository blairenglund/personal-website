<!DOCTYPE html>
<?php $pageID="links and file structure" ?>
<html>
<head>
	<title>links and file structure</title>
	<?php include 'php/themeswitcher.php'; ?>
</head>
<body>
	<div class="flex-container">
		<?php include 'php/sidebar.php' ?>

		<div class="content">
			<h3>links and file structure</h3>

			<h4>Subhead</h4>

			<p>

				articles.php - looks in the current diresctory for a sibbling asset in the same directory. This is dependent on where you are linking from. This is a relative link.

				/articles.php - a leading slash defaults to the root directory. It doesn't matter what page it links from, the slash tells the browser to go to the root directory instead of the local one.

				../articles - the double dots before the slash tell the browser that the file we are linking to is in the previous directory. These can be stacked i.e: ../../2016/story.php.

			</p>
		</div>
	</div>

</body>
</html>