<!-- 8.  Write a PHP script to print "second" and Red from the following array. 
         Sample Data : 
         $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
         "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
         "holes" => array ( "First", 5 => "Second", "Third")); -->

<?php

$color = array(
    "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("First", 5 => "Second", 6 => "Third")
);

print_r($color["holes"][5] . "<br />");
print_r($color["color"]["c"] . "<br />");

?>