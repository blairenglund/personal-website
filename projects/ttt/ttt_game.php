<link rel="stylesheet" type="text/css" href="/projects/ttt/ttt_style.css">

<?php include "ttt_scripts.php"; ?>

<h1>Tic Tac Toe</h1>
<form>
<?php if ($_GET["Submit"]=="Start") { ?>
<table>
	<tr>
		<td <?php gamebox("A1") ?> >
			<?php gameboxLinks("A1")?>
		</td>
		<td <?php gamebox("A2") ?> >
			<?php gameboxLinks("A2")?>
		</td>
		<td <?php gamebox("A3") ?> >
			<?php gameboxLinks("A3")?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox("B1") ?> >
			<?php gameboxLinks("B1")?>
		</td>
		<td <?php gamebox("B2") ?> >
			<?php gameboxLinks("B2")?>
		</td>
		<td <?php gamebox("B3") ?>  >
			<?php gameboxLinks("B3")?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox("C1") ?> >
			<?php gameboxLinks("C1")?>
		</td>
		<td <?php gamebox("C2") ?> >
			<?php gameboxLinks("C2")?>
		</td>
		<td <?php gamebox("C3") ?> >
			<?php gameboxLinks("C3")?>
		</td>
	</tr>
</table>
<?php } ?>
<br>
<input class="game__submit" type="submit" name="Submit" value="Start">
<?php if ($_GET["Submit"]=="Start"){ ?><input class="game__submit" type="submit" name="Submit" value="Reset"><?php } ?>
</form>
<br>

<?php
$exes = array();
$ohs = array();

foreach ($_GET as $position => $value) {
	if ($value == "X") {array_push($exes, $position);}
	elseif ($value == "O") {array_push($ohs, $position);}
} ?>

<?php
if ($_GET["Submit"]=="Start"){
	if (determineWinner($exes) == true) {echo "The Xs have it! Press Start to play again.";}
	elseif (determineWinner($ohs) == true) {echo "The Os have it! Press Start to play again.";}
}
if ($_GET["Submit"]=="Start"){
	if(count($exes) == 5) {echo "No more moves.<br>";}
	elseif (determineWinner($exes) == false && determineWinner($ohs) == false) {
		if (count($exes) == count($ohs)) {echo "It's your turn, player 1.<br>";}
		elseif (count($exes) > count($ohs)) {echo "It's your turn, player 2.<br>";}
	}
}

if (determineDraw($exes, $ohs) == true){echo "It's a draw. Press Start to play again.<br>";}

?>

