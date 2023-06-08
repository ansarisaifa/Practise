<!-- 3 . Write a PHP program to check wheather a given positive integer is a power of four 
    input : 4
    Output : 4 is power of four

     -->

     <?php 
        function power_of_four($n){
            if (($n & ($n - 1)) == 0) {
                return "$n is power of 4";
            } else {
                return "$n is not power of 4";
            }
        }
        print_r(power_of_four(4) . "<br />");
        print_r(power_of_four(64) . "<br />");
     ?>

<!-- input : 4
    Output : 4 is power of four -->