<!-- 10. Write a PHP script lowercase and uppercase. all in an array. -->

<?php

// Declare an array

$arr = array(
    'E', 'Ez',
    'Eze', 'Ezee'
);

$j = 0;

// overwriting the original array

foreach ($arr as $element) {
    $arr[$j] = strtoupper($element);

    $j++;
}

// Display the content of array

foreach ($arr as $element)
    echo $element . "<br />";

?>