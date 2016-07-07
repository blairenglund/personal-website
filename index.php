<?php $pageID="home" ?>
<?php $pageTitle="Home" ?>
<?php include "top.php" ?>

<p>hi i'm blair and i make things on the internet and on paper</p>

<?php
if (isset($_SESSION['theme'])) {echo "theme = ".$_SESSION['theme'];}
else {echo "theme = default";}
?>

<?php include "bottom.php" ?>