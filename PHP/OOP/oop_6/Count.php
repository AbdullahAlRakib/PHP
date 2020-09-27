<?php


namespace App\classes;


class Count
{
    public function Count(){
        $obj=(object)$_POST;
        $givenString=$obj->givenString;
        $result=[];
        $result['totalWord']=str_word_count($givenString);
        $result['totalCharecter']=strlen($givenString);
        return $result;
    }


}