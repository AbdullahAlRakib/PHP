<?php


namespace App\classes;


class Example
{
    public $name='Rahim';
    protected $email='info@gmail.com';
    private $mobile='01881868586';

    public function add(){
        echo 'In Add';
    }
    protected function sum(){
        echo 'In sum';
    }
    private function test(){
        echo 'In Test';
    }

}