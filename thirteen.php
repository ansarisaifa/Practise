<!-- 13. Write a PHP program to reverse the digit of an integer.

    Samnple :
    X = 234, return : 432
    X = -234, return : -432
 -->

<?php
function reverse_digits($num)
{
    if ($num < 0) {
        $num = abs($num);
        $is_negative = true;
    } else {
        $is_negative = false;
    }

    $num_str = strval($num);
    $num_len = strlen($num_str);
    $reversed_str = '';

    for ($i = $num_len - 1; $i >= 0; $i--) {
        $reversed_str .= $num_str[$i];
    }

    $reversed_num = intval($reversed_str);

    if ($is_negative) {
        $reversed_num *= -1;
    }

    return $reversed_num;
}

echo reverse_digits(234)."<br />"; // Output: 432
echo reverse_digits(-234); // Output: -432
?>