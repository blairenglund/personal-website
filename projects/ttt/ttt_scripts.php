<?php 
//this function generates the current page's URL
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];} 
	else {$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];}
	return $pageURL;
}

//this function gets the correct style for the boxes based on what marker they contain
function gamebox($coords){
	if ($_GET[$coords] == "X"){echo 'class="xselected"';} 
	elseif ($_GET[$coords] == "O"){echo 'class="oselected"';} 
	else {echo 'class="gamebox"';}
}

//this function generates links to choose the marker if one hasn't been put in that spot.
function gameboxLinks($coords){
	$url = curPageURL();
	if ($_GET[$coords] == "X"){echo "X";}
	elseif ($_GET[$coords] == "O"){echo "O";}
	else {
		echo '<a class="unselected__X" href="'.$url.'&'.$coords.'=X">X</a>&nbsp;';
		echo '<a class="unselected__O" href="'.$url.'&'.$coords.'=O">O</a>';
	}
}

//this function determines the winner by passing the $exes and #ohs arrays through an if-elseif loop. Each line in the function is specific to one win condition

function determineWinner($ary){
	//checks rows
	if (in_array("A1", $ary) && in_array("A2", $ary) && in_array("A3", $ary)) {return true;}
	elseif (in_array("B1", $ary) && in_array("B2", $ary) && in_array("B3", $ary)) {return true;}
	elseif (in_array("C1", $ary) && in_array("C2", $ary) && in_array("C3", $ary)) {return true;}
	// checks columns
	elseif (in_array("A1", $ary) && in_array("B1", $ary) && in_array("C1", $ary)) {return true;}
	elseif (in_array("A2", $ary) && in_array("B2", $ary) && in_array("C2", $ary)) {return true;}
	elseif (in_array("A3", $ary) && in_array("B3", $ary) && in_array("C3", $ary)) {return true;}
	//checks diagonals
	elseif (in_array("A1", $ary) && in_array("B2", $ary) && in_array("C3", $ary)) {return true;}
	elseif (in_array("A3", $ary) && in_array("B2", $ary) && in_array("C1", $ary)) {return true;}
	else {return false;}
}

//this function determines if there is a draw. if neither the $exes and $ohs have a win, and there are five X moves played, then it's a draw.

function determineDraw($ary1, $ary2){
	if (determineWinner($ary1) == false && determineWinner($ary1) == false && sizeof($ary1) >= 5) {
		echo "It's a draw. Try again?";
	}
}


?>