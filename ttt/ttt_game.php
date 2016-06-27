<link rel="stylesheet" type="text/css" href="ttt_style.css">

<?php print_r($_GET)
function FunctionName($value='')
{
	# code...
}


?>

<table>
	<tr>
		<td>
			<form action="ttt_playedmoves.php">
			<input type="radio" name="A1" value="X" <?php if ($_GET["A1"]=="X") { ?> checked <?php } ?> >X
			<input type="radio" name="A1" value="O" <?php if ($_GET["A1"]=="O") { ?> checked <?php } ?> >O<br>
			<input type="submit" name="A1Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="A2" value="X" <?php if ($_GET["A2"]=="X") { ?> checked <?php } ?> >X
			<input type="radio" name="A2" value="O" <?php if ($_GET["A2"]=="O") { ?> checked <?php } ?> >O<br>
			<input type="submit" name="A2Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="A3" value="X">X
			<input type="radio" name="A3" value="O">O<br>
			<input type="submit" name="A3Submit">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<form>
			<input type="radio" name="B1" value="X">X
			<input type="radio" name="B1" value="O">O<br>
			<input type="submit" name="B1Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="B2" value="X">X
			<input type="radio" name="B2" value="O">O<br>
			<input type="submit" name="B2Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="B3" value="X">X
			<input type="radio" name="B3" value="O">O<br>
			<input type="submit" name="B3Submit">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<form>
			<input type="radio" name="C1" value="X">X
			<input type="radio" name="C1" value="O">O<br>
			<input type="submit" name="C1Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="C2" value="X">X
			<input type="radio" name="C2" value="O">O<br>
			<input type="submit" name="C2Submit">
			</form>
		</td>
		<td>
			<form>
			<input type="radio" name="C3" value="X">X
			<input type="radio" name="C3" value="O">O<br>
			<input type="submit" name="C3Submit">
			</form>
		</td>
	</tr>
</table>