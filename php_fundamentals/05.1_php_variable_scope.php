<?php
    $x = 5;
    //A variable declared outside a function has a global scope
    //and can only be accessed outside a function.s
    function myTest() {
        //using x inside the function will generate an error
        echo "Variable value inside the function is : $x\n";
    }
    myTest();
    echo "Variable value outside the function is : $x";

    //Similarly variable with local scope
    function local() {
        $y = 10;
        echo "The value of y inside the function is : $y\n";
    }
    local();
    echo "The value of y outside the function is : $y\n";

    //The global keyword
    $a = 5;
    $b = 10;
    function myGlobal() {
        global $a, $b;
        $a = $a + $b;
    }
    myGlobal();

    echo "The global variable value is :";
    echo $a; // should print 15
?>
