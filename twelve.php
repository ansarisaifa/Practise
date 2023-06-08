<!-- 12. Write a PHP program to generate and display the first n lines of a floyd triangle (use n=5 and n=11 rows).
    According to wikipedia floyd's triangle is a right-angled traingular array of natural numbers used in computer science education.
    it is named after Robert Floyd's triangle with consecutive numbers,starting with a 1 in the top left corner. -->

<?php
$number = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . "&nbsp;";
        $number++;
        if ($j == $i) {
            echo "&nbsp;";
            echo "<br/>";
        }
    }
}
?>

<!-- Output :

1  
2 3  
4 5 6  
7 8 9 10  
11 12 13 14 15   -->
