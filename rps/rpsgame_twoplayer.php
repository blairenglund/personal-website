<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<h1>Wanna play a game?</h1>

<form>
<select name="p1choice">
	<option value="rock" <?php if($_GET["p1choice"] == "rock") { ?> selected <?php } ?>>rock</option>
	<option value="paper" <?php if($_GET["p1choice"] == "paper") { ?> selected <?php } ?>>paper</option>
	<option value="scissors" <?php if($_GET["p1choice"] == "scissors") { ?> selected <?php } ?>>scissors</option>
</select>

<select name="p2choice">
	<option value="rock" <?php if($_GET["p2choice"] == "rock") { ?> selected <?php } ?>>rock</option>
	<option value="paper" <?php if($_GET["p2choice"] == "paper") { ?> selected <?php } ?>>paper</option>
	<option value="scissors" <?php if($_GET["p2choice"] == "scissors") { ?> selected <?php } ?>>scissors</option>
</select>
<input type="submit" name="Submit">
</form>

<p>___________________________________</p>

<?php if ($_GET["Submit"] == "Submit") { ?>

	<?php $symbols = array("rock"=>'<i class="em em-gem"></i>', "paper"=>'<i class="em em-page_facing_up"></i>', "scissors"=>'<i class="em em-scissors"></i>'); ?>

	<?php 
	$p1c = $_GET["p1choice"]; 
	echo "Player 1 chose ".$p1c.$symbols[$p1c];
	?>

	<br><br>

	<?php
	$p2c = $_GET["p2choice"];
	echo "Player 2 chose ".$p2c.$symbols[$p2c];
	?>

	<br>

	<?php if ($p1c == $p2c) { ?> <h3>It's a draw</h3> <?php }
	else { 
		switch ($p1c) {
			case "rock":
				if ($p2c == "paper") { echo "<h3>Player 2 wins!</h3>";}
				else { echo "<h3>Player 1 wins!</h3>";}
				break;
			
			case "paper": 
				if ($p2c == "scissors") { echo "<h3>Player 2 wins!</h3>";}
				else { echo "<h3>Player 1 wins!</h3>";}
				break;

			case "scissors": 
				if ($p2c == "rock") { echo "<h3>Player 2 wins!</h3>";}
				else { echo "<h3>Player 1 wins!</h3>";}
				break;
		}
	}
	?>
<?php } ?>