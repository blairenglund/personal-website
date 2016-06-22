<?php 
	$pages = array("home"=> "index.html", "goals"=> "goals.html", "articles"=> "articles.html", "photos"=> "photos.html");
	foreach ($pages as $page => $address) {
		echo "<a href=".$address.">".$page."</a>&ensp;//&ensp;";
	}
?>