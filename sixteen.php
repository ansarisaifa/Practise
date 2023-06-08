<!-- 
    
16. Write a PHP script to remove all white spaces in an array.

-->

<?php

// Create an array with whitespace
$arr = array("Roman  ", "Sohan   ", "Shaina","<br />");

//print original array
echo "Original Array:<br /><br />";

foreach ($arr as $key => $value)
    print($arr[$key] );

// array_walk($arr, create_function('&$val',
//                 '$val = trim($val);'));

// Print modify array
echo "\nModified Array:.<br />";
foreach ($arr as $key => $value)
    print_r($arr[$key] );
?>