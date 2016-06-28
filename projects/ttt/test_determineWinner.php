<?php 
include 'ttt_determineWinner.php';

echo "\nTesting that three in top row wins\n";
$test1 = array("A1", "A2", "A3");
if (determineWinner($test1) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that three in a diagonal wins.\n";
$test2 = array("A1", "B2", "C3");
if (determineWinner($test2) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that three in a column wins.\n";
$test2 = array("A2", "B2", "C2");
if (determineWinner($test2) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that no three-in-a-row results in a cat's game.\n";
$test3 = array("A1", "A3", "B3", "C1" );
if (determineWinner($test3) == false) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";


?>