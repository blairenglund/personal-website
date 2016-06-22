<h3>Pages</h3>
<h5><ul>
<?php 
	$pages = array("home"=> "index.php", "goals"=> "goals.php", "articles"=> "articles.php", "photos"=> "photos.php");
	foreach ($pages as $page => $address) {
		if ($page == $pageID) {
			echo "<li>".$page."</li>";
		}
		else { 
			echo "<li><a href=".$address.">".$page."</a></li>";
		}
	}
?>
</ul></h5>
<h3>Articles</h3>
<h5>
<?php include 'php/listarticles.php' ?>
</h5>
<h3>Social</h3>
<h5>
<?php include 'php/social.php' ?>
</h5>