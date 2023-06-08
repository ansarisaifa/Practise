<!-- 9. Write a PHP script to trim all the element in an array using array_walk function. -->

<?php 
function myfunction($value, $key){
    echo "The key $key has the value $value<br>";
}
$a = array("a" => "Red", "b" => "green" , "c" => "blue" , 'd' => 'purple');
array_walk($a,"myfunction");
?>

<!-- 
Output :

The key a has the value Red
The key b has the value green
The key c has the value blue

-->




