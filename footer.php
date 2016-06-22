<h4>get in touch</h4>
	<p>
		<?php 
			$links = array("twitter"=> "https://twitter.com/blairenglund", "linkedin"=> "https://www.linkedin.com/in/blairenglund", "github"=> "https://github.com/blairenglund");
			foreach ($links as $page => $address) {
				echo "<a href=".$address.">".$page."</a>&ensp;//&ensp;";
			}
		?>
	</p>