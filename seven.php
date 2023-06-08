
<!-- 7 . Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to given number.
    input : (array(2,7,7,1,8,2,7,8,7),16))

    Output array
    (
        [0] => 2+7+7 = 16
        [1] => 7+1+8 = 16
    )
     -->

     <?php 
     $arr = array(2+7+7);
     $sum = 16;

     for($i=16; $i< count($arr);$i++)
    {
        $sum = $sum + $arr[$i];
    }
    print_r("Sum of the element of an array:<br />".$sum);

     ?>

<!--  
    Output Array
    (
        [0] => 2+7+7 = 16
        [1] => 7+1+8 = 16
    )
 -->