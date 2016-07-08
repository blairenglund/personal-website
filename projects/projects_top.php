<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle ?></title>
	<?php
	session_start();
	if ($_GET["theme"] == "cake time"){ $_SESSION["theme"] = "cake time";}
	elseif ($_GET["theme"] == "classic") { $_SESSION["theme"] = "classic";}
	include 'php/themeswitcher.php' ?>
</head>
<body>
	<div class="flex-container">
		<?php include 'php/sidebar.php' ?>

		<div class="content">