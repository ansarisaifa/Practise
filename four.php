
<!-- 4. Write a PHP script that inserts a new item in any array in any poition 
   Expected Output
   Original array:
   1 2 3 4 5
   After Inserting '$' the array is : 
   1 2 3 $ 4 5  -->
   


<?php
$original = array('1', '2', '3', '4', '5');
echo 'Original array : ' . "<br />";
foreach ($original as $x) {
    echo "$x ";
}
$inserted = '$';

array_splice($original, 3, 0, $inserted);

echo " <br \> After inserting '$' the array is : " . "<br \>";
foreach ($original as $x) {
    echo "$x ";
}
echo "<br>"
?>

<!-- 
    
Output :

Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5 

-->