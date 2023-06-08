<!-- 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total  -->


<?php
$sum = 0;
$number = 30;
for ($x = 1; $x <= $number; $x++) {                                                                                                                                                                                                    
    $sum += $x;
}
echo "The sum of the numbers <br> 0 to 30 is <br> $sum" . "<br />";
?>

<!-- Output :

The sum of the numbers
0 to 30 is
465
 -->