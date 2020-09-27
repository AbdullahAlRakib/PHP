<?php


namespace App\classes;


class Pencilbox
{
    public $name ='Rahim';
    protected $emails='info@gmail.com';
    private $password='123456';

    public function add(){
        echo 'in add ';
    }
                                        //access modifier
                                        //public,private,protected
    protected function sum(){
        echo 'in Sum';
    }
    private function test(){
        echo 'In Test';
    }
}