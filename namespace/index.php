<?php
    require 'products.php';
    require 'testing.php';
    function wow(){
        echo "Wow from Index file. <br>";
    }
    // $obj= new test\product();

    $obj1= new pro\v1\command\product();
    
    // wow();
    pro\wow();
?>