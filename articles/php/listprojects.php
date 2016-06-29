<ul>
<?php 

	//array contains page name and URL, then the loop creates a list from the k/v pairs.

	$projects = array("rock paper scissors"=> "rps.php", "tic tac toe"=>"ttt.php");
	foreach ($projects as $page => $address) {
		if ($page == $pageID) {
			echo "<li id='currentpage'><a href=/projects/".$address.">".$page."</a></li>";
		}
		else { 
			echo "<li><a href=/projects/".$address.">".$page."</a></li>";
		}
	}
?>
</ul>