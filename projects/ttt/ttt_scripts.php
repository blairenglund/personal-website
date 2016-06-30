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
function gamebox($coords){
	if ($_GET[$coords] == "X"){echo 'class="xselected"';} 
	elseif ($_GET[$coords] == "O"){echo 'class="oselected"';} 
	else {echo 'class="gamebox"';}
}

//this function generates links to choose the marker if one hasn't been put in that spot.
function gameboxLinks($coords, $ary1, $ary2){
	$url = curPageURL();
	if ($_GET[$coords] == "X"){echo "X";}
	elseif ($_GET[$coords] == "O"){echo "O";}
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

//this function will determine the computer's choice to play
//function computerChoice($ary){
	//$corners = array("A1", "A3", "C1", "C3")
	//if b2, the best position is not played, plays there
	//if (in_array("B2", $ary)==false){array_push($ary, "B2"); $ary["B2"]=>"X"}
	//if b2 is played, then plays in a corner
	//elseif (in_array("B2", $ary)==true){array_push($ary, array_rand($corners)=>"X"}
	//if the opponent has two in a row, then plays to block
	//elseif (){}
	//if none of the above conditions are met, plays randomly
	//else (){}
//}


?>