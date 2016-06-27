<?php 
	$pics = range(0, 18);
	echo "<img src='php/slideshow/images/image_".array_rand($pics,1).".gif' alt='random .gif'>";
 ?>