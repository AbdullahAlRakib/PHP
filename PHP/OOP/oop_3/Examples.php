<?php


namespace App\classes;
require_once './Example.php';


class Examples extends Example
{
        public $name ='karim';
        protected $email='karim@gmail.com';
        private $mobile ='01793505129';

        public function one(){
            echo 'In One';
        }
        protected function two(){
            echo 'In Two';
        }
        private function three(){
            echo 'In Three';
        }
}