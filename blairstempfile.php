<h1>It's 
	<?php 
		if (date("l") == Monday) {echo "just another manic Monday";}
		elseif (date("l") == Wednesday) {echo "Hump Day";}
		elseif (date("l") == Friday) {echo "Friday! Friday! Gotta get down on Friday!"}
		else {echo date("l");}
	?>  
</h1>

<?php 
	echo "Hello!"
 ?>