<ul>
<?php 

	//array contains page name and URL, then the loop creates a list from the k/v pairs.

	$articles = array("intelligent machines threaten major upheavals in employment and labor."=> "ai_and_future_of_labor.php", "what is the web?"=> "what_is_the_web.php", "head, body, and html"=> "head_body_and_html.php", "links and file structure"=> "links_and_file_structure.php", "tic tac trouble"=> "tic_tac_trouble.php");
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