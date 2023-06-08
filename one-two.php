<!-- 1. $color= array ('white','green','red','blue','black');
Write a Script which will display the following string 
"The memory of that scene for me is like a fame of a fil forever frozen at that moment the red carpet, the green lawn the white house,
the leaden sky. the new president and his first day - Richard M Nixon"
and the words 'red','green',and 'white' will come from $color. -->


<?php $colours = array("white", "green", "red", "blue", "black");

echo "The memory of that scene for me is like a frame of film forever frozen at that moment:the
 $colours[2] carpet, the $colours[1] lawn, the $colours[0] house, the leaden sky.The new president and his first lady.
  - Richard M. Nixon";

?>
<!-- 2. $color = array('white', 'green', 'red'')Write a PHP script which will display the colors in the following way :Output :white, green, red,greenredwhite -->
<?php $color = array('white', 'green', 'red');
foreach ($color as $c) {
    echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
?>

<!-- Output :

The memory of that scene for me is like a frame of film forever frozen at that moment:the red carpet, the green lawn, the white house, the leaden sky.The new president and his first lady. - Richard M. Nixon white, green, red,
green
red
white 
        -->