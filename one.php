<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be on hyphen(-) at starting  and ending position. -->

<?php
$number = 10;
for ($x = 1; $x <= $number; $x++) {
    if ($x < $number) {
        echo "$x-";
    } else {
        echo "$x" . "\n";
    }
}
?>

<!-- Output :

1-2-3-4-5-6-7-8-9-10 -->