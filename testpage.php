<!DOCTYPE html>
<html>
<head>
	<title>blair englund</title>
</head>
<body>
	<div class="header">
		<h1><a href="index.html" style="color:#2F8DCA; text-decoration:none;">blair englund</a></h1>
	</div>

	<div class="navbar">
		<h4>
		<?php 
			$pages = array("home"=> "index.html", "goals"=> "goals.html", "articles"=> "articles.html", "photos"=> "photos.html");
			foreach ($pages as $page => $address) {
				echo "<a href=".$address.">".$page."</a>&ensp;//&ensp;";
			}

		 ?>
		 </h4>
	</div>

	<div class="footer">
		<h4>get in touch</h4>
			<p>
				<?php 
					$links = array("twitter"=> "https://twitter.com/blairenglund", "linkedin"=> "https://www.linkedin.com/in/blairenglund", "github"=> "https://github.com/blairenglund");
					foreach ($links as $page => $address) {
						echo "<a href=".$address.">".$page."</a>&ensp;//&ensp;";
					}
			 	?>
		 	</p>
	</div>
</body>
</html>