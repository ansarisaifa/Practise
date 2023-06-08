<!-- 15. Write a PHP program to check wheather a sequence of number is an arithmetic progression or not.
in mathematics, an arithmetic progression or arithmetic sequence is sequence of numbers
Such that the difference between the consecutive terms is constant.

input : Array (5,7,9,11)
Output : An Arithmetic Sequence

For example, the sequence 5, 7, 9, 11, 13, 15 ... is an arithmetic progression with common difference of 2.
 -->

<?php
function is_arithmetic($arr)
{
    $delta = $arr[1] - $arr[0];

    for ($index = 0; $index < sizeof($arr) - 1; $index++) {

        if (($arr[$index + 1] - $arr[$index]) != $delta) {


            return "Not An Arithmetic Sequence";
        }
    }
    return "An Arithmetic Sequence";
}

$my_arr1 = array(5,7,9,11);
$my_arr2 = array(6,7,9,11);


print_r(is_arithmetic($my_arr1) . "<br />");
print_r(is_arithmetic($my_arr2) . "<br />");

?>