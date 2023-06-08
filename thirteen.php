<!--
     13. Write a PHP a function to remove a specified, duplicate entry from an array.
 -->

 <?php

// Input Array

$a = array("red","green", "red", "blue","purple");

// Array after removing duplicates

print_r(array_unique($a));

?>
<!-- 
Output :

Array ( [0] => red [1] => green [3] => blue [4] => purple ) Output :

-->
