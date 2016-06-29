<link rel="stylesheet" type="text/css" href="/projects/ttt/ttt_style.css">

<?php

include "function_curPageUrl.php";
$url = curPageURL();
echo curPageURL()."<br>";
print_r($_GET);

?>

<h3>Tic Tac Toe</h3>
<form>
<table>
	<tr>
		<td <?php if ($_GET["A1"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["A1"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&A1=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&A1=O">'; ?> O</a>
		</td>
		<td <?php if ($_GET["A2"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["A2"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&A2=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&A2=O">'; ?> O</a>
		</td>
		<td <?php if ($_GET["A3"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["A3"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&A3=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&A3=O">'; ?> O</a><br>
		</td>
	</tr>
	<tr>
		<td <?php if ($_GET["B1"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["B1"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&B1=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&B1=O">'; ?> O</a>
		</td>
		<td <?php if ($_GET["B2"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["B2"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&B2=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&B2=O">'; ?> O</a>
		<td <?php if ($_GET["B3"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["B3"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&B3=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&B3=O">'; ?> O</a>
		</td>
	</tr>
	<tr>
		<td <?php if ($_GET["C1"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["C1"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&C1=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&C1=O">'; ?> O</a>
		</td>
		<td <?php if ($_GET["C2"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["C2"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&C2=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&C2=O">'; ?> O</a>
		<td <?php if ($_GET["C3"] == "X"){ ?> class="xselected" <?php } elseif ($_GET["C3"] == "O") { ?> class="oselected" <?php } ?> >
			<?php echo '<a href="'.$url.'&C3=X">'; ?> X</a>
			<?php echo '<a href="'.$url.'&C3=O">'; ?> O</a>
		</td>
	</tr>
</table>
<input type="submit" name="Submit" value="Start">
<input type="submit" name="Submit" value="Reset">
</form>

<?php
$exes = array();
$ohs = array();

foreach ($_GET as $position => $value) {
	if ($value == "X") {array_push($exes, $position);}
	elseif ($value == "O") {array_push($ohs, $position);}
} ?>

<?php
if ($_GET["Submit"]=="Start") {
 	include 'ttt_determineWinner.php';}
	
	if (determineWinner($exes) == true) {echo "The Xs have it!";}
	elseif (determineWinner($ohs) == true) {echo "The Os have it!";}
?>

