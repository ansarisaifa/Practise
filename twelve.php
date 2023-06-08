<!-- 12. Write a php program to add the digits of a positive integer repeatedly untill the result has a single digit 
    for example given num1ber is 59 , the result will be 5

    input : 48
    Output : 3

    step 1: 5+9 = 14
    step 1: 1+4 = 5 -->

    <?php
// PHP program to calculate the sum of digits
function sum($num1) {
	$sum = 0;
	for ($i = 0; $i < strlen($num1); $i++){
		$sum += $num1[$i];
	}
	return $sum;
}

// Driver Code

$num = "48";
$num1 = "12";
echo "Single Digit is 48 : 4+8 = ".sum($num);
echo "Single Digit is 12 : 1+2 = " .sum($num1);

?>


