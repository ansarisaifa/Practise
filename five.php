<!-- 
    5. Write a PHP program to find a missing number (s) from an array.

    input : 1,2,3,6,7,8

   
 -->

 <?php 
    function not_present($list)
    {
        $new_array = range(min($list), max($list));

        return array_diff($new_array, $list);
    }
    print_r(not_present(array(1,2,3,6,7,8)));
 ?>

<!-- 
Output : array 
    (
        [3] => 4
        [4] => 5
    )
 -->
