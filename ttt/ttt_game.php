<style type="text/css">
	table{
		border-spacing: 5px;
	}

	@font-face {
	    font-family: Sullivan-Fill;
	    src: url(../css/fonts/Sullivan-Fill.otf);
	}

	td{
    	border-collapse: collapse;
    	padding: 40px 40px 0px 40px;
    	background-color: #ccc;
    	font-family: "Sullivan-Fill";
    	font-size: 2em;
	}

	td:hover{
		background-color: #3299BB;
	}

	td:onclick{
		background-color: #3299BB;
	}

</style>



<table>
	<tr>
		<td>
			<?php if $_GET["A1Submit"] == "Submit"; {echo $_GET["A1"]} 
			else { ?>
				<form>
				<input type="radio" name="A1" value="X">X
				<input type="radio" name="A1" value="O">O<br>
				<input type="submit" name="A1Submit">
				</form>
			<?php } ?>
		</td>
		<td>
			<form>
			<input type="radio" name="A2" value="X">X
			<input type="radio" name="A2" value="O">O<br>
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