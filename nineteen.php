<!-- 19. Write a PHP program to check wheather a given number is an ugly number.

    input : 12
    Output : 12 is an ugly number

    Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5. The sequence 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, ...
    shows the first 10 ugly numbers.

    Note: 1 is typically treated as an ugly number.
    
-->

<?php 
    // for($i=0; $i<=5; $i++){
    //     for($j=0; $j<=$i; $j++){
    //         echo "*";
    //     }
    //     echo "<br />";
    // }

function maxDivide($a, $b)
{
	while ($a % $b == 0)
	$a = $a / $b;
	return $a;
}


function isUgly($no)
{
	$no = maxDivide($no, 2);
	$no = maxDivide($no, 3);
	$no = maxDivide($no, 5);
	
	return ($no == 1)? 1 : 0;
}


function getNthUglyNo($n)
{
	$i = 1;
	
	
	$count = 1;


while ($n > $count)
{
	$i++;	
	if (isUgly($i))
	$count++;
}
return $i;
}

	
	$no = getNthUglyNo(12);
	echo "12th ugly no is : <br /> ". $no;


?>

