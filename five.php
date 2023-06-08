<!-- 5.Write a program to calculate and print the factorial of a number using a or loop.
The facrorial of a number is the product of all integer upto and including that number,
so the factorial of 4 is 4*3*2*1 = 24.  -->

<?php
$number = 4;
$x = 1;
for ($i = 1; $i <= $number - 1; $i++) {
    $x *= ($i + 1);
}
echo "The factorial of  $number = $x" . "<br />";

?>

<!--
     Output :
    The Factorial is 4*3*2*1 = 24. 
-->