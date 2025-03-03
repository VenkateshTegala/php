<?php
    /*
    HTML forms
    Name:<input type="text" name="name"> <br>
    E-mail :<input type="email" name="email"> <br>
    */
    
    echo "php form :<br>";

    if (isset($_GET["name"]) && isset($_GET["email"])) {
        echo "Name: " . htmlspecialchars($_GET["name"]) . "<br>";
        echo "E-mail: " . htmlspecialchars($_GET["email"]) . "<br>";
    } else {
        echo "No data received.";
    }
    //similarly $_POST[]
?>