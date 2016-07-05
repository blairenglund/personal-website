<?php 
include 'ttt_scripts.php';

echo "\nTesting that it blocks at A2\n";
$test1 = array(0=> "A1", 1=> "A3");
$test2 = array("A1"=>"X", "B2"=>"0", "A3"=>"X");
if (blockMove($test1, $test2) == "A2") {
  echo blockMove($test1, $test2)." Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that it blocks at C1\n";
$test3 = array(0=>"A1", 1=>"B1");
$test4 = array("A1"=>"X", "B2"=>"0", "B1"=>"X");
if (blockMove($test3, $test4) == "C1") {
  echo blockMove($test3, $test4)." Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that it blocks at A3\n";
$test5 = array(0=>"C1", 1=>"B2");
$test6 = array("B2"=>"X", "C1"=>"X", "C3"=>"0");
if (blockMove($test5, $test6) == "A3") {
  echo blockMove($test5, $test6)." Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";


?>