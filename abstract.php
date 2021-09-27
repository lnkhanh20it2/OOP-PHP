<?php
    abstract class parentClass{
       public $name;

       abstract protected function calc($a,$b);
   }
   class childClass extends parentClass {
        public function calc($c,$d){
           // echo $c + $d;
           echo "Hello";
        }
   }
   $text = new childClass();
   $text->calc(20,30);
?>