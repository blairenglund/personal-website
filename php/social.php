<ul>
	<?php 
		$links = array("twitter"=> "https://twitter.com/blairenglund", "linkedin"=> "https://www.linkedin.com/in/blairenglund", "github"=> "https://github.com/blairenglund");
		foreach ($links as $page => $address) {echo "<li><a href=".$address.">".$page."</a></li>";}
	?>
</ul>