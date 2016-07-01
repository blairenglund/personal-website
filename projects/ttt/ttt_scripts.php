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

//this function tracks the current turn
function determineTurn($ary1, $ary2){
	if(count($ary1) == 5) {return 0;}
	elseif (determineWinner($ary1) == false && determineWinner($ohs) == false) {
		if (count($ary1) == count($ary2)) {return 1;}
		elseif (count($ary1) > count($ary2)) {return 2;}
	}
}

//this function gets the correct style for the boxes based on what marker they contain
function gamebox($ary, $coords){
	if ($ary[$coords] == "X"){echo 'class="xselected"';} 
	elseif ($ary[$coords] == "O"){echo 'class="oselected"';} 
	else {echo 'class="gamebox"';}
}

//this function generates links to choose the marker if one hasn't been put in that spot.
//coordinates first, then x moves, o moves, and $_GET or storage array
function gameboxLinks($coords, $ary1, $ary2, $ary3){
	$url = curPageURL();
	if ($ary3[$coords] == "X"){echo "X";}
	elseif ($ary3[$coords] == "O"){echo "O";}
	else {
		if(determineTurn($ary1, $ary2) == 1){
			echo '<a class="unselected__X" href="'.$url.'&'.$coords.'=X">X</a>';}
		elseif(determineTurn($ary1, $ary2) == 2){
			echo '<a class="unselected__O" href="'.$url.'&'.$coords.'=O">O</a>';}
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
	if (determineWinner($ary1) == false && determineWinner($ary2) == false && sizeof($ary1) >= 5) {return true;}
}

//this function will determine if their is a move to be blocked by the computer
function blockMove($ary){
		//for horiz. two-in-a-rows
	if     (in_array("A1", $ary) && in_array("A2", $ary)) {return "A3";}
	elseif (in_array("A2", $ary) && in_array("A3", $ary)) {return "A1";}
	elseif (in_array("B1", $ary) && in_array("B2", $ary)) {return "B3";}
	elseif (in_array("B2", $ary) && in_array("B3", $ary)) {return "B1";}
	elseif (in_array("C1", $ary) && in_array("C2", $ary)) {return "C3";}
	elseif (in_array("C2", $ary) && in_array("C3", $ary)) {return "C1";}
		//for vert. two-in-a-rows
	elseif (in_array("A1", $ary) && in_array("B1", $ary)) {return "C1";}
	elseif (in_array("A2", $ary) && in_array("B2", $ary)) {return "C2";}
	elseif (in_array("A3", $ary) && in_array("B3", $ary)) {return "C3";}
	elseif (in_array("B1", $ary) && in_array("C1", $ary)) {return "A1";}
	elseif (in_array("B2", $ary) && in_array("C2", $ary)) {return "A2";}
	elseif (in_array("B3", $ary) && in_array("C3", $ary)) {return "A3";}
		//for diag. two-in-a-rows
	elseif (in_array("A1", $ary) && in_array("B2", $ary)) {return "C3";}
	elseif (in_array("B2", $ary) && in_array("C3", $ary)) {return "A1";}
	elseif (in_array("A3", $ary) && in_array("B2", $ary)) {return "A1";}
	elseif (in_array("B2", $ary) && in_array("C1", $ary)) {return "A3";}
		//for splits
	elseif (in_array("A1", $ary) && in_array("A3", $ary)) {return "A2";}
	elseif (in_array("C1", $ary) && in_array("C3", $ary)) {return "C2";}
	elseif (in_array("A1", $ary) && in_array("C1", $ary)) {return "B1";}
	elseif (in_array("A3", $ary) && in_array("C3", $ary)) {return "B3";}
	else {return 0;}
}


//this function will determine the computer's choice to play
function computerChoice($ary){
	$corners = array("A1", "A3", "C1", "C3");
	//will need to remove corners as they are played
	foreach ($corners as $position) {
		if (array_key_exists($position, $ary)) {array_splice($corners, array_search($position, $corners), 1);}
	}
	$randomCorner = $corners[array_rand($corners)];
	$possiblePlays = array("A1", "A2", "A3", "B1", "B2", "B3", "C1", "C2", "C3");
	//will need to remove any play as it is played
	foreach ($possiblePlays as $position) {
		if (array_key_exists($position, $ary)) {array_splice($possiblePlays, array_search($position, $possiblePlays), 1);}
	}
	$randomMove = $possiblePlays[array_rand($possiblePlays)];

	//if b2, the best position is not played, plays there.
	if (array_key_exists("B2", $ary) == false) {return "B2";}
	//if the opponent has two in a row, then plays to block
	elseif (array_key_exists("B2", $ary) == true && count($exes)>1){
		if (blockMove($ary)!=0){return blockMove($ary);}
	}
	//if b2 is played, and nothing needs to be blocked then plays in a corner
	elseif (array_key_exists("B2", $ary) == true && blockMove($ary) == 0) {return $randomCorner;}
	//if none of the above conditions are met, plays randomly
	else {return $randomMove;}
}


?>