<!-- 3. Create a script to construct the following pattern, using nested for loop. -->


<?php
$number = 5;
for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<!-- // Output :

//      *
//      **
//      ***
//      ****
//      ***** -->