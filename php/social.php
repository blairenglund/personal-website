	<?php 
		$links = array("php/icons/icon_twitter_black.png"=> "https://twitter.com/blairenglund", "php/icons/icon_linkedin_black.png"=> "https://www.linkedin.com/in/blairenglund", "php/icons/icon_git_black.png"=> "https://github.com/blairenglund");
		foreach ($links as $img => $address) {echo "<a href=".$address."><img src=".$img." height=35px ></a>";}
	?>