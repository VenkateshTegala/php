<?php
    //printing string
    echo "Hello\n";
    //via variable
    $x = "John";
    echo "Name is $x\n";
    //string length
    echo strlen("Hello World");
    echo "\n";
    //Its a word count not no of letters
    echo str_word_count("Hello World");
    echo "\n";
    //Search for text within a string
    echo strpos("Hello World!","World!");
    echo "\n";
    //Upper case
    $y = "Hello World!";
    echo strtoupper($y);
    echo "\n";
    //lower case
    echo strtolower($y);
    echo "\n";
    //replace string
    echo str_replace("World", "Dolly", $y);
    echo "\n";
    //reverse a string
    echo strrev($y);
    echo "\n";
    //remove white space
    echo trim("   Hello World!   ");
    echo "\n";
    //concatenation
    echo "$x $y" ;
    echo "\n";
    //slicing strings
    echo substr($y, 6, 5);
    echo "\n";
    //slice to end
    echo substr($y, 3);
    echo "\n";
?>