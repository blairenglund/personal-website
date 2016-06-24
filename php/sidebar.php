<div class="sidebar">
	<div class="header">
		<a href="index.php"><strong>blair englund</strong></a>
		<?php include 'php/social.php' ?>
	</div>

	<div class="navbar">
		<form>
			<select name="theme">
				<option value="classic" <?php if($_GET["theme"] == "classic") { ?> selected <?php } ?> >classic</option>
				<option value="cake time" <?php if($_GET["theme"] == "cake time") { ?> selected <?php } ?> >cake time</option>
			</select>
			<input type="submit" name="submittheme">
		</form>
		<?php include 'php/navbar.php' ?>
	</div>
</div>