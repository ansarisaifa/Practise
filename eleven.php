<!-- 11. Write a PHP program to find the single element appears once in an array  where every element appears twice exept for me.

input : Array(5, 3, 0, 3, 0, 5, 7, 7, 9)

Output : 9 -->

<?php


function findSingle($arr, $arr_size)
{
    // elements and return

    $res = $arr[0];

    for ($i = 1; $i < $arr_size; $i++)

        $res = $res ^ $arr[$i];

    return $res;
}

// Driver code

$arr = array(5, 3, 0, 3, 0, 5, 7, 7, 9);

$n = count($arr);

echo "Single Number is ", findSingle($arr, $n);

?>