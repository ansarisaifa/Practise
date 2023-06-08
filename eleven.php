<!-- 11. Write a PHP Program which iterates the integer from 1 to 150  for multiples of three print "fizz" instead of number and for the multiples of five print "BUZZ".
    For numbers which are multiples of both three and five print "FizzBuzz". -->

<?php
$number = 150;
for ($i = 1; $i <= $number; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " FizzBuzz" . "\n";
    } else if ($i % 3 == 0) {
        echo $i . " Fizz" . "\n";
    } else if ($i % 5 == 0) {
        echo $i . " Buzz" . "\n";
    } else {
        echo $i . "<br />";
    }
}
?>