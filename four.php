<!-- 4. Crate a Script to construct the following pattern, using a nested or loop. -->

<?php
$number = 5;
for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br>';
}
for ($i = $number; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br>';
}

// Output : 

//      *
//      * *
//      * * *
//      * * * *
//      * * * * *
//      * * * * *
//      * * * *
//      * * *
//      * *
//      *
