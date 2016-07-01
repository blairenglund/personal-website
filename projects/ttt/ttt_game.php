<link rel="stylesheet" type="text/css" href="/projects/ttt/ttt_style.css">

<?php include "ttt_scripts.php";
?>

<?php
//I want to replace query params with an associative array stored in a text file
//It should read the file and turn that string into an array
$gamefile = fopen("ttt_game.txt", r) or die("Unable to open file!");
$gameStateStr = fgets($gamefile);
fclose("ttt_game.txt");

$gameStateAry = array_flip(explode("|", $gameStateStr));
print_r($gameStateAry);

$playedmoves = array();

foreach ($gameStateAry as $key => $value) {
	$coord = substr($key, 0, 2);
	$marker = substr($key, -1);
	array_push($playedmoves, $coord);
	$playedmoves[$coord] = $marker;
}

print_r($playedmoves);

$exes = array();
$ohs = array();

foreach ($playedmoves as $position => $value) {
	if ($value == "X") {array_push($exes, $position);}
	elseif ($value == "O") {array_push($ohs, $position);}
} ?>

<h1>Tic Tac Toe</h1>
<form>
<?php if ($_GET["Submit"]=="Two-Player") { ?>
<table>
	<tr>
		<td <?php gamebox($playedmoves, "A1") ?> >
			<?php gameboxLinks("A1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "A2") ?> >
			<?php gameboxLinks("A2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "A3") ?> >
			<?php gameboxLinks("A3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox($playedmoves, "B1") ?> >
			<?php gameboxLinks("B1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "B2") ?> >
			<?php gameboxLinks("B2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "B3") ?>  >
			<?php gameboxLinks("B3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox($playedmoves, "C1") ?> >
			<?php gameboxLinks("C1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "C2") ?> >
			<?php gameboxLinks("C2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "C3") ?> >
			<?php gameboxLinks("C3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
</table>
<?php } ?>

<?php if ($_GET["Submit"]=="One-Player") { ?>
<table>
	<tr>
		<td <?php gamebox($playedmoves, "A1") ?> >
			<?php gameboxLinks("A1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "A2") ?> >
			<?php gameboxLinks("A2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "A3") ?> >
			<?php gameboxLinks("A3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox($playedmoves, "B1") ?> >
			<?php gameboxLinks("B1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "B2") ?> >
			<?php gameboxLinks("B2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "B3") ?>  >
			<?php gameboxLinks("B3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox($playedmoves, "C1") ?> >
			<?php gameboxLinks("C1", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "C2") ?> >
			<?php gameboxLinks("C2", $exes, $ohs, $playedmoves)?>
		</td>
		<td <?php gamebox($playedmoves, "C3") ?> >
			<?php gameboxLinks("C3", $exes, $ohs, $playedmoves)?>
		</td>
	</tr>
</table>
<?php } ?>

<br>
<?php if ($_GET["Submit"]!="Two-Player" and $_GET["Submit"]!="One-Player"){ ?><input class="game__submit" type="submit" name="Submit" value="One-Player"><input class="game__submit" type="submit" name="Submit" value="Two-Player"><?php } ?>
<?php if ($_GET["Submit"]=="Two-Player" or $_GET["Submit"]=="One-Player"){ ?><input class="game__submit" type="submit" name="Submit" value="Reset"><?php } ?>
</form>
<br>

<?php

$allplayedmoves = array();

$flipX = array_flip($exes);
$flipO = array_flip($ohs);

foreach ($flipX as $key => &$value) {
	$value = "X";
	$storestr = $key.",".$value;
	array_push($allplayedmoves, $storestr);
}
foreach ($flipO as $key => &$value) {
	$value = "O";
	$storestr = $key.$value;
	array_push($allplayedmoves, $storestr);
}

$gameString = implode("|", $allplayedmoves); //creates a string of values to store
 
//Here we're opening the file back up and overwriting the old board state with the new one
$gamefile = fopen("ttt_game.txt", w) or die("Unable to open file!");
fwrite($gamefile, $gameString);
fclose("ttt_game.txt");
?>

<?php
//for two-player games--------------------------------------------------------

if ($_GET["Submit"]=="Two-Player"){
	if (determineWinner($exes) == true) {echo "The Xs have it!<br>";}
	elseif (determineWinner($ohs) == true) {echo "The Os have it!<br>";}
}

if ($_GET["Submit"]=="Two-Player"){
	if (determineWinner($exes) == true or determineWinner($ohs) == true) {echo "Nice job! Press Start to play again.";}
	elseif (determineTurn($exes, $ohs)==1){echo "It's your turn, Player 1";}
	elseif (determineTurn($exes, $ohs)==2) {echo "It's your turn, Player 2";}
}
if ($_GET["Submit"]=="Two-Player"){
	if (determineDraw($exes, $ohs) == true){echo "It's a draw. Press Start to play again.<br>";}
}
?>

<?php
//for one-player games--------------------------------------------------------

if ($_GET["Submit"]=="One-Player"){
	if (determineTurn($exes, $ohs)==2){echo "The computer plays ".computerChoice($_GET)."<br>";}
}

if ($_GET["Submit"]=="One-Player"){
	if (determineWinner($exes) == true) {echo "The Xs have it!<br>";}
	elseif (determineWinner($ohs) == true) {echo "The Os have it!<br>";}
}

if ($_GET["Submit"]=="One-Player"){
	if (determineWinner($exes) == true or determineWinner($ohs) == true) {echo "Nice job! Press Start to play again.";}
	elseif (determineTurn($exes, $ohs)==1){echo "It's your turn, Player 1";}
	elseif (determineTurn($exes, $ohs)==2) {echo "It's your turn, Player 2";}
}

if ($_GET["Submit"]=="One-Player"){
	if (determineDraw($exes, $ohs) == true){echo "It's a draw. Press Start to play again.<br>";}
}
?>

