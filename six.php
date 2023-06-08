<!-- 6. Write a PHP script which display all the number between 200 to 250 that are divisible by 4  -->

<?php
//  echo implode(",",range(200,250,4))."<br \>";
$number = 250;
for ($i = 200; $i <= $number; $i++) {
    if ($i % 4 == 0) {
        if ($i <= $i) {
            echo $i . ',';
        } else {
            echo $i;
        }
    }
}
?>

<!--  
    
Output :

200,204,208,212,216,220,224,228,232,236,240,244,248 

-->