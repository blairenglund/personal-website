<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<h1>Wanna play a game?</h1>

<form>
<select name="choice">
	<option value="rock" <?php if($_GET["choice"] == "rock") { ?> selected <?php } ?>>rock</option>
	<option value="paper" <?php if($_GET["choice"] == "paper") { ?> selected <?php } ?>>paper</option>
	<option value="scissors" <?php if($_GET["choice"] == "scissors") { ?> selected <?php } ?>>scissors</option>
</select>
<input type="submit" name="Submit">
</form>

<p>___________________________________</p>

<?php if ($_GET["Submit"] == "Submit") { ?>

	<?php $symbols = array("rock"=>'<i class="em em-gem"></i>', "paper"=>'<i class="em em-page_facing_up"></i>', "scissors"=>'<i class="em em-scissors"></i>'); ?>

	<?php 
	$pc = $_GET["choice"]; 
	echo "You chose ".$pc.$symbols[$pc];
	?>

	<br><br>

	<?php
	$choices = array("rock", "paper", "scissors");
	$cc = $choices[array_rand($choices)];
	echo "I chose ".$cc.$symbols[$cc];
	?>

	<br>

	<?php include "rps/determineWinner.php"; 

	determineWinner($pc, $cc) ?>

<?php } ?>