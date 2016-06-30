<link rel="stylesheet" type="text/css" href="/projects/ttt/ttt_style.css">

<?php include "ttt_scripts.php"; ?>

<?php
$exes = array();
$ohs = array();

foreach ($_GET as $position => $value) {
	if ($value == "X") {array_push($exes, $position);}
	elseif ($value == "O") {array_push($ohs, $position);}
} ?>

<h1>Tic Tac Toe</h1>
<form>
<?php if ($_GET["Submit"]=="Start") { ?>
<table>
	<tr>
		<td <?php gamebox("A1") ?> >
			<?php gameboxLinks("A1", $exes, $ohs)?>
		</td>
		<td <?php gamebox("A2") ?> >
			<?php gameboxLinks("A2", $exes, $ohs)?>
		</td>
		<td <?php gamebox("A3") ?> >
			<?php gameboxLinks("A3", $exes, $ohs)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox("B1") ?> >
			<?php gameboxLinks("B1", $exes, $ohs)?>
		</td>
		<td <?php gamebox("B2") ?> >
			<?php gameboxLinks("B2", $exes, $ohs)?>
		</td>
		<td <?php gamebox("B3") ?>  >
			<?php gameboxLinks("B3", $exes, $ohs)?>
		</td>
	</tr>
	<tr>
		<td <?php gamebox("C1") ?> >
			<?php gameboxLinks("C1", $exes, $ohs)?>
		</td>
		<td <?php gamebox("C2") ?> >
			<?php gameboxLinks("C2", $exes, $ohs)?>
		</td>
		<td <?php gamebox("C3") ?> >
			<?php gameboxLinks("C3", $exes, $ohs)?>
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
if ($_GET["Submit"]=="Start"){
	if (determineWinner($exes) == true) {echo "The Xs have it!<br>";}
	elseif (determineWinner($ohs) == true) {echo "The Os have it!<br>";}
}

if ($_GET["Submit"]=="Start"){
	if (determineWinner($exes) == true or determineWinner($ohs) == true) {echo "Nice job! Press Start to play again.";}
	elseif (determineTurn($exes, $ohs)==1){echo "It's your turn, Player 1";}
	elseif (determineTurn($exes, $ohs)==2) {echo "It's your turn, Player 2";}
}

if (determineDraw($exes, $ohs) == true){echo "It's a draw. Press Start to play again.<br>";}

?>

