<?php
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
