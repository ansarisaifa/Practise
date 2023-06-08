<!-- 10. Write a PHP program to find single element in an array where every element appears three times except for me.

input array : (5,3,4,3,5,5,3)

Output Array:
(
    [0] => 5
    [1] => 3
    [2] => 4
    [3] => 3
    [4] => 5
    [5] => 5
    [6] => 3

) -->
<?php
// PHP code to find the element

$INT_SIZE= 32;

function getSingle($arr, $n)
{
	global $INT_SIZE;
	
	// Initialize result
	$result = 0;
	
	for ($i = 0; $i < $INT_SIZE; $i++)
	{
	// Find sum of set bits at ith
	// position in all array elements

	$sum = 0;
	$x = (1 << $i);
	for ($j = 0; $j < $n; $j++ )
	{
		if ($arr[$j] & $x)
			$sum++;
	}

	if (($sum % 3) !=0 )
		$result |= $x;
	}

	return $result;
}

$arr = array (5, 3, 4, 3, 5, 5, 3);
$n = sizeof($arr);

echo "The Element with Single Number is :",getSingle($arr, $n);
?>

