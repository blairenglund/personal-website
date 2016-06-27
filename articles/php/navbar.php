<h3>Pages</h3>
<ul>
<?php 
	$pages = array("home"=> "index.php", "goals"=> "goals.php", "photos"=> "photos.php");
	foreach ($pages as $page => $address) {
		if ($page == $pageID) {
			echo "<li id='currentpage'><a href=/'".$address."''>".$page."</a></li>";
		}
		else { 
			echo "<li><a href='/".$address."''>".$page."</a></li>";
		}
	}
?>
</ul>
<h3>Projects</h3>
<?php include 'php/listprojects.php' ?>
<h3>Articles</h3>
<?php include 'php/listarticles.php' ?>