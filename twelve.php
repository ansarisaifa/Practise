<!-- 12. Write a PHP program to remove duplicate values from an array which contains only strings or only integers -->

<?php
$colors = array( 0 => "Red", 1 => "Green", 2 => "White", 3 => "Black", 4 => "Red");
    
$numbers = array(0 => 100, 1 => 200, 3 => 300, 4 => 400, 5 => 500);

        $uniq_colors = array_keys(array_flip($colors));

        $uniq_numbers = array_keys(array_flip($numbers));

        print_r($uniq_colors);

        print_r($uniq_numbers);
?>

<!-- 
Output : 

Array ( [0] => Red [1] => Green [2] => White [3] => Black ) Array ( [0] => 100 [1] => 200 [2] => 300 [3] => 400 [4] => 500 )

-->