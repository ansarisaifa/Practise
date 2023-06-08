
<?php
$number = 10;
echo "<pre>";
for ($row = 0; $row <= $number; $row++) {
    for ($column = 0; $column <= $number; $column++) {
        if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";

// Output :

// ***                                                       
// *   *                                                      
// *   *                                                      
// *****                                                      
// *   *                                                      
// *   *                                                      
// *   *                                                      
// *   * 
