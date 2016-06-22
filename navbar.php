<?php 
	$pages = array("home"=> "index.php", "goals"=> "goals.php", "articles"=> "articles.php", "photos"=> "photos.php");
	foreach ($pages as $page => $address) {
		if ($page == $pageID) {
			echo $page."&ensp;//&ensp;";
		}
		else { echo "<a href=".$address.">".$page."</a>&ensp;//&ensp;";}
	}
?>