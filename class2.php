<?php

use calculation as GlobalCalculation;

class calculation{
    private $number1 ,$number2; 
     

    function setnum1($number1)
    {
        $this->number1=$number1;
    }
    function setnum2($number2)
    {
        $this->number2=$number2;
    }


    function getnumbers()
    {
        return $this->number1+$this->number2;
    }



}

$obj =new calculation();
$obj->setnum1(12);
$obj->setnum2(13);
echo $obj->getnumbers();






?>