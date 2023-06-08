<!-- 18 . Write a PHP program where you take any position integer n, i n is even, divide it by 2 get n/2 
    i n is odd, multiply it by 3 and add 1 to obtain 3n+1. Repeat the process untill you reach 1.

    input : 12
    Output : Array(
        [0] => 12
        [1] => 6
        [2] => 3
        [3] => 10
        [4] => 5
        [5] => 16
        [6] => 8
        [7] => 4
        [8] => 2
        [9] => 1
    )

    According to Wikipedia the Collatz conjecture is a conjecture in mathematics named after Lothar Collatz, who first proposed it in 1937.
    The conjecture is also known as the 3n + 1 conjecture.
    The conjecture can be summarized as follows. Take any positive integer n. 
    If n is even, divide it by 2 to get n / 2. If n is odd, multiply it by 3 and add 1 to obtain 3n + 1.
    Repeat the process (which has been called "Half Or Triple Plus One") indefinitely.
    The conjecture is that no matter what number you start with, you will always eventually reach 1.

    Example :
        For instance, starting with n = 12, one gets the sequence 12, 6, 3, 10, 5, 16, 8, 4, 2, 1.
        n = 19, for example, takes longer to reach 1: 19, 58, 29, 88, 44, 22, 11, 34, 17, 52, 26, 13, 40, 20, 10, 5, 16, 8, 4, 2, 1. 
    -->

    <?php 
        function print_collatz($n)
        {
            while($n !=1)
            {
                echo $n . " ";
 
        // If $n is odd
        if ($n & 1)
            $n = 3 * $n + 1;
 
        // If even
        else
            $n = $n / 2;

            }
            echo $n;
        }
        print_r(print_collatz(19)."<br />");
        print_r(print_collatz(12));
    ?>