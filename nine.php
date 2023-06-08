<!-- 9. Write a PHP Script using nested or loop that creates a chess board as shown below.
   Use table width ="270px" and take 30px as cell height and width. -->

<!DOCTYPE html>
<html>

<head>
    <title></title>

</head>

<body>
    <h3>Chess Board using Nested For Loop</h3>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <!-- cell 270px wide (8 columns x 60px) -->
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=black></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=white></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>