<?php
    class abc{
        public function __construct(){
            echo "This is construct function <br>";
        }
        // public function __construct(){
        //     $this -> conn = mysqli_connect();
        // }
        public function hello(){
            echo "Hello <br>";
        }
        public function __destruct(){
            echo "This is destruct function <br>";
        }
        // public function __destruct(){
        //    mysqli_close($this->conn);
        // }
    }
    $text = new abc();
    $text->hello();
?>