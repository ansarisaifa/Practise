<!-- 
    6. Write a PHP program to three numbers from an array such that the sum of three consecutive number equals to zero.
    input : (-1,0,1,2,-1,-4)

 -->

 <?php 
    $arr= array(-1,0,1);
    $sum = 0;

    for($i=0; $i< count($arr);$i++)
    {
        $sum = $sum + $arr[$i];
    }

    print_r("Sum of the element of an array is -1+0+1 = :".$sum);

 ?>

<!--
     Output : Array 
    (
        [0] => -1+0+1 = 0
    )
 -->

