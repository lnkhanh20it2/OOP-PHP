<?php
    class abc{
        public $data = ["name"=>"Le Ngoc Khanh","course"=>"PHP","free"=>"3000000"];

        public function __get($key){
            if(array_key_exists($key,$this->data)){
                return $this->data[$key];
            } else {
                return "this Key ($key) is not defined.";
            }
        }
    }
    $test = new abc();
    
    echo $test->course;
?>