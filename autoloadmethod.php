<?php
    // require "classes/first.php";
    // require "classes/second.php";
    function __autoload($class){
        require "classes/" . $class . ".php";
    }

    $text = new second();
?>