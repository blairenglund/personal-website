<h4>
<?php 
	$pages = array("home"=> "index.php", "goals"=> "goals.php", "articles"=> "articles.php", "photos"=> "photos.php");
	foreach ($pages as $page => $address) {
		if ($page == $pageID) {
			echo $page."&emsp;";
		}
		else { 
			echo "<a href=".$address.">".$page."</a>&emsp;";
		}
	}
?>
</h4>