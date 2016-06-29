<h3>tic tac trouble</h3>

<h4>DAY 1 : The breakdown</h3>
<p>
To start building Tic Tac Toe for I broke down the way the game works. In essence:
<ul>
	<li>players take turns placing markers</li>
	<li>players can't play in a spot that has already been played</li>
	<li>a player wins by having three markers in a row</li>
	<li>there are eight possible winning permutations on the board</li>
	<ul>
		<li>three horizontal rows</li>
		<li>three vertical columns</li>
		<li>two diagonals</li>
	</ul>
</ul>
Following that I began devising a system for building a board in html. I opted for a table and a little css to create the nine playable positions. I named the playable positions A1, A2, A3, B1, B2, and so on. Then I added radio buttons in each position to select the marker. At this point I'm trusting the players to keep each other honest and not change the selections.
</p><br>

<h4>DAY 2: The re-up</h4>
<p>
This morning I began creating a function to determine the winner based on the selected positions. The function uses params and the $_GET superglobal to check for one of the winning combinations for each player.

After getting it to a half-functioning state I built a test for the function. This proved to be quite helpful in finding issues with the function and in getting a better grasp on params. With that I got a working build of my own Tic Tac Toe program but decided I could make it better and more intuitive for the players.

I broke down the table and built in some php algorithms to change the color when a position is played. I dropped the radio buttons for submit buttons, and then drpped those for standard links. Using a PHP function to grab the current URL, I was able to add params with the links. Now I can have the boxes change color, making the game a lot easier to understand visually. Combining this new functionality with the old algorithm I created a very basic tic tac toe board with visual cues for a win.

</p>
