<!-- 7. Write a program which will count THE 'r' character in the next "w3resource". -->

<?php
$text = "w3resource";
$search_char = "r";
$count = "0";
for ($x = "0"; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == $search_char) {
        $count = $count + 1;
    }
}
echo $count . "\n";
?>