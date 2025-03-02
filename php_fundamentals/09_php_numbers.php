<?php
    $a = 5;
    $b = 5.34;
    $c = "25";
    var_dump($a);
    var_dump($b);
    var_dump($c);

    $x = 5985;
    var_dump(is_int($x));
    $y = 59.85;
    var_dump(is_int($y));
    var_dump(is_float($y));

    //Checking whether numeric or not
    echo "Checking the numeric :\n";
    $x = 5985;
    var_dump(is_numeric($x));
    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    $x = "Hello";
    var_dump(is_numeric($x));

?>