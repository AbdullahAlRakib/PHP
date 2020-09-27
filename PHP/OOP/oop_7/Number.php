<?php


namespace App\classes;


class Number
{
    public function createSeries(){
        $obj=(object)$_POST;
        $result=' ';
        for($i=$obj->startingNumber; $i=$obj->endingNumber; $i++){
            $result=$i .' ';
        }
        return $result;
    }
}