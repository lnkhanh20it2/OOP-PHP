<?php
    class base{
        protected static $name = "Khanh";
        
        public function show(){
            echo static::$name;
            echo self::$name;
        }
      
    }
    class derived extends base {
        protected static $name="Ngoc";
    }

    $test = new derived();

    $test->show();
?>