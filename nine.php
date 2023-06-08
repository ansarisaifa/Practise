<!-- 9. Write a PHP program to find a single number in an array that does not occur twice.
    input :  array (5,3,4,3,4)

    Output Array :
    (
        [0] => 5
        [1] => 3
        [2] => 4
        [3] => 3
        [4] => 4
    )
     -->


<?php
function single_number($arr)
{

    $result = $arr[0];

    for ($i = 1; $i < sizeof($arr); $i++) {
        $result = $result ^ $arr[$i];
    }
    return $result;
}
            $arr1 = array(5, 3, 4, 3, 4);

                
                                    print_r($arr1);
                                    print_r('Single Number: ' . single_number($arr1) . "<br />");
                                  
?>