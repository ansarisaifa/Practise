<!-- 16. Write a PHP program to print alphabet pattern Z. -->

<?php
$number = 7;
for ($row = 0; $row < $number; $row++) {
    for ($column = 0; $column <= $number; $column++) {
        if ((($row == 0 or $row == 6) and $column >= 0 and $column <= 6) or $row + $column == 6)
            echo "*";
        else
            echo "&nbsp ";
    }
    echo "<br>";
}
?>

<!-- Output 

*******
      *
     *
    *
   *
  *
 *
*******

-->