<?php


namespace App\classes;


class Calc
{
    public function mainCalculation(){
        $obj=(object)$_POST;
        if($_POST['btn']=='+'){
            $ans=$_POST['firstNumber']+$_POST['secondNumber'];
            return $ans;
        }
        if($_POST['btn']=='-'){
            $ans=$_POST['firstNumber']-$_POST['secondNumber'];
            return $ans;
        }
        if($_POST['btn']=='*'){
            $ans=$_POST['firstNumber']*$_POST['secondNumber'];
            return $ans;
        }
        if($_POST['btn']=='/'){
            $ans=$_POST['firstNumber']/$_POST['secondNumber'];
            return $ans;
        }
        if($_POST['btn']=='%'){
            $ans=$_POST['firstNumber']%$_POST['secondNumber'];
            return $ans;
        }

    }

}