<?php 
function determineWinner($pc, $cc) {
	if ($pc == $cc) { ?> <h3>It's a draw</h3> <?php }
		else {
			switch ($pc) {
				case "rock":
					if ($cc == "paper") { echo "<h3>I win!</h3>";}
					else { echo "<h3>You win!</h3>";}
					break;
				
				case "paper": 
					if ($cc == "scissors") { echo "<h3>I win!</h3>";}
					else { echo "<h3>You win!</h3>";}
					break;

				case "scissors": 
					if ($cc == "rock") { echo "<h3>I win!</h3>";}
					else { echo "<h3>You win!</h3>";}
					break;
			}
		}
}
?>