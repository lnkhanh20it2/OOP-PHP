<?php
    class student{
        private $fname;
        private $lname;

        private function setName($firstname,$lastname){
            $this->fname = $firstname;
            $this->lname = $lastname;
        }

         public function __call($method,$args){
             echo "this is private or Non existing method : $method";
         } 
    }
    $text = new student();

    $text->setName("LeNgoc","Khanh");
?>