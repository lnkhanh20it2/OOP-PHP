<?php
    class person{
        public $name;      
        public $age;  
        function __construct($name= "No Name",$age=0){
            $this->name = $name;
            $this->age = $age;
        }

        function show(){
            echo $this->name . " - " . $this->age . "\n";
        }
    }
    $p1 = new person();
    $p2 = new person("Khanh Le",20);
    $p3 = new person("Huy le",22);
    // $p1->name = "Le Khanh";
    // $p1->age = 20;
    
    $p1->show();
    $p2->show();
    $p3->show();
?>