<?php
    //Creating a function
    function HelloWorld() {
        echo "Hello World!\n";
    }
    //calling a function
    HelloWorld();

    //Function with arguments
    function Hello_with_name($name) {
        echo "Hello $name\n";
    }
    Hello_with_name("Venky");
    Hello_with_name("Alex");

    //Function without arguments
    function Hello_with_default($default = "John") {
        echo "Hello $default\n";
    }
    Hello_with_default("Tony");
    Hello_with_default();
    Hello_with_default("Stark");

    //Function returning values
    function returning_value($a, $b) {
        $c = $a + $b;
        return $c;
    }
    $sum = returning_value(5, 3);
    echo "Sum :$sum\n";
?>