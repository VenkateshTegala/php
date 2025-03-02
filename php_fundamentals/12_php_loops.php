<?php
    //while loop
    echo "while loop\n";
    $a = 5;
    while($a > 0) {
        echo $a."\n";
        $a -= 1;
    }

    //do while
    echo "do while\n";
    $y = 0;
    do{
        echo $y,"\n";
    }while($y > 0);

    //for loop
    echo "for loop\n";
    for($z = 1; $z < 6; $z++) {
        echo $z."\n";
    }

    //break staetement
    echo "break statement :\n";
    $a = 1;
    while($a < 5){
        if($a == 3){
            break;
        }
        echo $a."\n";
        $a++;
    }

    //continue
    echo "continue:\n";
    $b = 0;
    while($b < 6) {
        $b++;
        if($b == 3) continue;
        echo $b."\n";

    }
?>