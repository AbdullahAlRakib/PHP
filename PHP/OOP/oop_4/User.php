<?php


namespace App\classes;


class User
{
    public function makeFullName(){
        $users=(object)$_POST;
        $firstName=$users->firstName;
        $lastName=$users->lastName;
        $fullName=$firstName.'  '.$lastName;
        return $fullName;
    }
}