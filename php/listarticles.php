<ul>
<?php 
	$articles = array("intelligent machines threaten major upheavals in employment and labor."=> "ai_and_future_of_labor.php", "what is the web?"=> "what_is_the_web.php");
	foreach ($articles as $page => $address) {
		if ($page == $pageID) {
			echo "<li id='currentpage'><a href=".$address.">".$page."</a></li>";
		}
		else { 
			echo "<li><a href=".$address.">".$page."</a></li>";
		}
	}
?>
</ul>