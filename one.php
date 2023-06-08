<!--
     1. Write a PHP Programm to check whaether a given positive integer is apower of two
 
    -->

<?php
function power_of_two($n)
{
    if (($n & ($n - 1)) == 0) {
        return "$n is power of 2";
    } else {
        return "$n is not power of 2";
    }
}
print_r(power_of_two(4) . "<br />");
print_r(power_of_two(16) . "<br />");

?>



<!-- Output -->

