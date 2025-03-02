<?php
    //if
    if(5 > 3) {
        echo "5 greater than 3\n";
    }

    //if else
    $x = "Hello World";
    if(strlen($x) < 5) {
        echo "Short string\n";
    } else {
        echo "Long string\n";
    }

    //Just an exercise
    $hour = date("H");
    if($hour < 20) {
        echo "Have a good day\n";
    }else{
        echo "Have a good night";
    }

    //Shorthand if
    $x = 5;
    if ($x > 3) $b = "Hello";
    echo $b."\n";

    //Shorthand if else
    $a = 10;
    $b = $a < 5 ? "Hello" : "Good Bye";
    echo $b;
?>
