<?php 
include 'ttt_scripts.php';

echo "\nTesting that it blocks at A2\n";
$test1 = array(0=> "A1", 1=> "A3");
if (blockMove($test1) == "A2") {
  echo blockMove($test1)."Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that it blocks at C1\n";
$test2 = array(0=>"A1", 1=>"B1");
if (blockMove($test2) == "C1") {
  echo blockMove($test2)." Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\nTesting that it blocks at A3\n";
$test3 = array(0=>"C1", 1=>"B2");
if (blockMove($test3) == "A3") {
  echo blockMove($test3)." Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";


echo "\n###################################################################\n";
echo "Tests complete.\n";


?>