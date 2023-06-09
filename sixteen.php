<!-- 16.    Write a Php Program to check wheather of sequence of number is a geometric progression
       or not
       Input : array(2, 6, 18, 54)
       Output : Geometric sequence
       In mathematics, a geometric progression or geometric sequence, 
       is a sequence of numbers where each term after the first is found by multiplying the previous one by a fixed,
       non-zero number called the common ratio.
       For example, the sequence 2, 6, 18, 54, ... is a geometric progression with common ratio 3.
       Similarly, 10, 5, 2.5, 1.25, ..0. is a geometric sequence with common ratio 1/2.
    
    -->

<?php
function is_geometric($arr)
{
    if (sizeof($arr) <= 1)
        return True;
    # Calculate ratio

    $ratio = $arr[1] / $arr[0];

    # Check the ratio of the remaining

    for ($i = 1; $i < sizeof($arr); $i++) {
        if (($arr[$i] / ($arr[$i - 1])) != $ratio) {
            return "Not a geometric sequence";
        }
    }
    return "Geometric sequence";
}
$my_arr1 = array(2, 6, 18, 54);
$my_arr2 = array(3,6,18,54);


print_r(is_geometric($my_arr1) . "<br />");
print_r(is_geometric($my_arr2) . "<br />");
?>