<!-- 6. Write a program which will give you all o the potential combinations of a two digits decimal combination, printed in a comma delimited format : -->

<?php
for ($a = 0; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        echo $a . $b . ", ";
    }
}
printf("\n");
?>