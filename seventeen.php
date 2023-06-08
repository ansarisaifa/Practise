<!-- 17. Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form.
    input : 13,14

    Output : 72

    Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc.
    Therefore all the leading zeros will be omitted.

-->
<?php 
    function reverse_sum($n1,$n2)
    {
        return reverse_integer($n1) + reverse_integer($n2);
    }

    function reverse_integer($n)
    {
        $reverse = 0;

        while($n > 0)
        {
            $reverse = $reverse *10;
            $reverse = $reverse + $n % 10;
            $n = (int)($n/10);
        }
        return $reverse;
    }

    print_r(reverse_sum(13,14)."<br />");
    print_r(reverse_sum(23,45). "<br />")
?>