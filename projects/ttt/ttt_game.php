<link rel="stylesheet" type="text/css" href="/projects/ttt/ttt_style.css">

<h3>Tic Tac Toe</h3>
<form>
<table>
	<tr>
		<td>
			<input type="radio" name="A1" value="X">X
			<input type="radio" name="A1" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="A2" value="X">X
			<input type="radio" name="A2" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="A3" value="X">X
			<input type="radio" name="A3" value="O">O<br>
		</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="B1" value="X">X
			<input type="radio" name="B1" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="B2" value="X">X
			<input type="radio" name="B2" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="B3" value="X">X
			<input type="radio" name="B3" value="O">O<br>
		</td>
	</tr>
	<tr>
		<td>
			<input type="radio" name="C1" value="X">X
			<input type="radio" name="C1" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="C2" value="X">X
			<input type="radio" name="C2" value="O">O<br>
		</td>
		<td>
			<input type="radio" name="C3" value="X">X
			<input type="radio" name="C3" value="O">O<br>
		</td>
	</tr>
</table>
<input type="submit" name="Submit">
</form>

<?php 
print_r($_GET); ?><br>

<?php
$exes = array();
$ohs = array();

foreach ($_GET as $position => $value) {
	if ($value == "X"){array_push($exes, $position);}
	elseif ($value == "O") {array_push($ohs, $position);}
} ?>

<?php print_r($exes); ?> <br>
<?php print_r($ohs); ?> <br>

<?php
if ($_GET["Submit"]=="Submit") {
 	include 'ttt_determineWinner.php';}
	
	if (determineWinner($exes) == true) {echo "The Xs have it!";}
	elseif (determineWinner($ohs) == true) {echo "The Xs have it!";}
	else {echo "it's a draw.";}
?>
