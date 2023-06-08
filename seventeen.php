<!-- 
    
17. Write a PHP program to create a range like the following array.
Array 
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
)

-->

<?php 

$fnumber = array(20,21,22,23,24,25);
$lnumber = array(2,3,4,5,6,7);

$r=array_combine($fnumber,$lnumber);
print_r($r);
?>

<!-- 
    
Output :

Array ( [20] => 2 [21] => 3 [22] => 4 [23] => 5 [24] => 6 [25] => 7 ) 

-->