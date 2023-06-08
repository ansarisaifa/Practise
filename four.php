<!--
     4. Write a PHP program to check wheather an integer is the power of another integer.
 -->

 <?php 
    function power_of_another($x, $y){
        $a = $x;
        $b = $y;
        
        while ($x % $y == 0){
            $x = $x / $y;
        }

        if($x == 1){
            return "$a is power of $b";
        }
        else{
            return "$a is power of $b";
        }
    }
    print_r(power_of_another(16,2). "<br />");
    print_r(power_of_another(81,3). "<br />");
    print_r(power_of_another(64,4). "<br />");
 ?>