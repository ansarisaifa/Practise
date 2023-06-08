<!-- 15. Write a PHP program to filter out some element with certain key names 

    Test Data :

    1st Array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black')
    2nd Array : ('c2', 'c4')

    Output :
    Array 
    (
        [c2] => Green
        [c4] => Black
    ) -->

    <?php 
    $a1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    $a2 = array('c1', 'c3');

    $result = array_diff_key( $a1, array_flip( $a2));
    print_r($result);

    ?>