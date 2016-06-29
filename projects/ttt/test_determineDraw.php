<?php 
include 'ttt_scripts.php';

echo "\nTesting that three in top row is not a draw.\n";
$test1 = array("A1", "A2", "A3");
$test2 = array("B2", "B3");
if (determineDraw($test1, $test2) == false) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that three in a diagonal is not a draw.\n";
$test3 = array("A1", "B2", "C3");
$test4 = array("A2", "C1");
if (determineDraw($test3, $test4) == false) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that five moves with no three-in-a-rows is a draw\n";
$test5 = array("A1", "B2", "C2", "A3", "B1");
$test6 = array("A2", "B3", "C1", "C3");
if (determineDraw($test5, $test6) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";


?>